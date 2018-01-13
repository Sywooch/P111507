<?php 
    namespace frontend\controllers;

use frontend\components\FrontendController;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use frontend\models\SearchModel;
use frontend\models\CommentModel;
use frontend\models\QuestionModel;
use frontend\models\CommentLikeModel;
use frontend\models\CommentFollowModel;
use frontend\models\AnswerModel;
use common\models\Comments;
use common\models\User;
use common\models\Topics;
use common\models\CredentialEmployment;
use common\models\CredentialEducation;
use common\models\CredentialLocation;
/**/
use yii\db\Expression;
use yii\db\Query;
use yii\data\ActiveDataProvider;
use common\models\sphinx\SphinxGlobalSearch;
use yii\helpers\BaseFileHelper;
use yii\web\UploadedFile;
use common\models\extmodels\UploadForm;

class AjaxController extends FrontendController
{

    // TODO ADD BEHAVIOR FUNCTION FOR GUEST

    // public function beforeAction($action)
    // {
    //     \Yii::$app->response->format = Response::FORMAT_JSON;
    //     return parent::beforeAction($action);
    // }

    public static function jsonOut($error, $msg = null, $data = []) {
        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_JSON;
        $response->data = [
            'error' => $error, 
            'msg' => $msg,
            'data' => $data,
        ];
        return $response;
    }

    public function actionAddComment()
    {
        try {
            $model = new CommentModel;
            $model->value = crequest()->post('value');
            $model->id = crequest()->post('id');
            $model->type = crequest()->post('type');
            $model->comment_parent_id = crequest()->post('parent');
            if ($model->validate()) {
                $result = $model->craeteComment();
                return $this->renderAjax('comment-item', ['model' => $result]);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionSearchMain() 
    {
        try {
            $model = new SearchModel;
            $model->key = crequest()->get('key');
            if ($model->validate()) {
                $result = $model->search();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionGetComment() 
    {
        try {
            $model = new CommentModel;
            $model->id = crequest()->get('id');
            $model->type = crequest()->get('type');
            $comments = $model->getComment();
            return $this->renderAjax('comment', ['comments' => $comments]);
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionLikeComment()
    {
        try {
            $model = new CommentLikeModel;
            $model->id = crequest()->post('id');
            if ($model->validate()) {
                $result = $model->like();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionFollowComment()
    {
        try {
            $model = new CommentFollowModel;
            $model->id = crequest()->post('id');
            if ($model->validate()) {
                $result = $model->follow();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionFavoriteAnswer()
    {
        try {
            $model = new AnswerModel;
            $model->id = crequest()->post('id');
            if ($model->validate()) {
                $result = $model->favorite();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }


    public function actionReportAnswer()
    {
        try {
            $model = new AnswerModel();
            $model->id = crequest()->post('id');
            $model->reason_id = crequest()->post('reason_id');
            $model->setRulesReport();
            if ($model->validate()) {
                $result = $model->report();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionFollowAnswer()
    {
        try {
            $model = new AnswerModel();
            $model->id = crequest()->post('id');
            $model->setRulesFollow();
            if ($model->validate()) {
                $result = $model->follow();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }
    }

    public function actionAnswer()
    {
        try {
            $model = new QuestionModel();
            $model->id = crequest()->post('id');
            $model->text = crequest()->post('text');
            $model->setRulesCreateAnswer();
            if ($model->validate()) {
                $result = $model->createAnswer();
                return $this->jsonOut(false, 'success', $result);
            } else {
                return $this->jsonOut(true,  $model->getErrors());
            }
        } catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        } 
    }
	
	public function actionUserUploadAvatarProfiles()
	{
		$fileImgName 	= "";
		$pathUpload    	= Yii::getAlias('@frontend').'/web/uploads/avatars/';
		$uid 			= \Yii::$app->user->identity->id;
		$modelUser 		= User::findOne($uid);
		$fileImgName 	= slug($modelUser->username).'-'.time() .'.jpg';
		$folderDate		= date('Y') . '/' . date('m').'/';
		$dbPath			= $folderDate.$fileImgName;
		$maxSize		= 5*1024*1024; //5MB
		$data 			= crequest()->post('img');
		
		if (!is_dir($pathUpload.$folderDate)) // check isset folder
		{
			BaseFileHelper::createDirectory($pathUpload.$folderDate, 0775, TRUE);
		}
		
		
		if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
			$data = substr($data, strpos($data, ',') + 1);
			$type = strtolower($type[1]); // jpg, png, gif

			if (!in_array($type, ['jpg', 'jpeg', 'gif', 'png' ])) {
				return $this->jsonOut(true, 'invalid image type');
			}

			$data = base64_decode($data);

			if ($data === false) {
				return $this->jsonOut(true, 'fail');
			}
		} else {
			return $this->jsonOut(true, 'fail');
		}
		file_put_contents($pathUpload . $dbPath, $data);
		$modelUser->avatar = $dbPath;
		if($modelUser->save())
		{
			return $this->jsonOut(false, 'success');
		}
	}
	
	public function actionSearchTopicsProfiles()
    {
        $key = $_REQUEST['q'];
        //$data = array();
        if (!empty($key)) {
            $data = Topics::getTopicsByKey(convert_vi_to_en($key));
        }
        return json_encode($data);
    }
	
	public function actionTooltipTopic()
	{
		try{
			$id 	= (int)crequest()->post("id");
			$result = Topics::findOne($id);
			if (!empty($result)) {
                return $this->renderAjax('tooltip-topic', [
					'model' => $result,
				]);
            } else {
               return $this->jsonOut(true, 'fail','');
            }
		}catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }	
	}

    public function actionCreateTopics()
    {
        $key = Yii::$app->request->post('key');
        return json_encode(Topics::createTopicKnow($key));
    }
	
	public function actionAddUserEmployment()
    {
		if(!Yii::$app->request->isAjax || Yii::$app->user->isGuest){
			die("valid!");
		}
		
        $employment_position    = crequest()->post("employment_position");
        $employment_company     = crequest()->post("employment_company");
        $employment_startyear   = crequest()->post("employment_startyear");
        $employment_endyear     = crequest()->post("employment_endyear");
        $employment_i_current_work_here = crequest()->post("employment_i_current_work_here");
        $modelTopic             = Topics::findOne($employment_company);
        $user_id                = Yii::$app->user->identity->id;
		if(strtotime($employment_startyear) > strtotime($employment_endyear))
		{
			return json_encode([
				'error' => true,
				'data'  => ''
			]);
		}
        if(!empty($modelTopic) && isset($user_id))
        {
				$model = credentialEmployment::find()->where(["user_id"=>$user_id])->one();
				if(empty($model)){
					$model = new credentialEmployment();
				}
				
                $model->user_id     = $user_id;
                $model->position    = $employment_position;
                $model->company     = $employment_company;
                $model->start_year  = $employment_startyear;
                $model->end_year    = $employment_endyear;
                $model->i_current_work_here = $employment_i_current_work_here;
                if($model->save())
                {
                    return json_encode([
                    'error' => false,
                    'data'  => credentialEmployment::find()->where("id =:id",["id"=>$model->id])->asArray()->one()
                    ]);
                }
        }
        return json_encode([
            'error' => true,
            'data'  => ''
        ]);
    }
	
	public function actionAddUserEducation()
    {
		if(!Yii::$app->request->isAjax || Yii::$app->user->isGuest){
			die("valid!");
		}
		
        $education_school   		= crequest()->post("education_school");
        $education_concentration    = crequest()->post("education_concentration");
        $education_secondary_concentration  = crequest()->post("education_secondary_concentration");
        $education_degree_type  	= crequest()->post("education_degree_type");
        $education_graduation_year 	= crequest()->post("education_graduation_year");
		
        $model_education_school                     = Topics::findOne($education_school);
        $model_education_concentration              = Topics::findOne($education_concentration);
        $model_education_secondary_concentration    = Topics::findOne($education_secondary_concentration);
        
        $user_id                                    = Yii::$app->user->identity->id;
        if(!empty($model_education_school) && isset($user_id))
        {
				$model = CredentialEducation::find()->where(["user_id"=>$user_id])->one();
				if(empty($model)){
					$model = new CredentialEducation();
				}
                $model->user_id             = $user_id;
                $model->school              = $education_school;
                $model->concentration       = $education_concentration;
                $model->secondary_concentration = $education_secondary_concentration;
                $model->degree_type         = $education_degree_type;
                $model->graduation_year     = $education_graduation_year;
                if($model->save())
                {
                    return json_encode([
                    'error' => false,
                    'data'  => CredentialEducation::find()->where("id =:id",["id"=>$model->id])->asArray()->one()
                    ]);
                }
                else
                {
                    return json_encode([
                        'error' => true,
                        'data'  => $model->getErrors()
                    ]);
                }
        }
        return json_encode([
            'error' => true,
            'data'  => ''
        ]);
    }
	
	public function actionAddUserLocation()
    {
		if(!Yii::$app->request->isAjax || Yii::$app->user->isGuest){
			die("valid!");
		}
			
		$location_id_position       = crequest()->post("location_id_position");
        $location_startyear         = crequest()->post("location_startyear");
        $location_endyear           = crequest()->post("location_endyear");
        $location_current           = crequest()->post("location_current");
        $location                   = Topics::findOne($location_id_position);
        $user_id                    = Yii::$app->user->identity->id;
		
		if(strtotime($location_startyear) > strtotime($location_endyear))
		{
			return json_encode([
				'error' => true,
				'data'  => ''
			]);
		}
		
        if(!empty($location) && isset($user_id))
        {
				$model = CredentialLocation::find()->where(["user_id"=>$user_id])->one();
				if(empty($model)){
					$model = new CredentialLocation();
				}
				
                $model->user_id             = $user_id;
                $model->location            = $location_id_position;
                $model->start_year          = $location_startyear;
                $model->end_year            = $location_endyear;
                $model->i_current_live_here = $location_current;
                if($model->save())
                {
                    return json_encode([
                    'error' => false,
                    'data'  => CredentialLocation::find()->where("id =:id",["id"=>$model->id])->asArray()->one()
                    ]);
                }
                else
                {
                    return json_encode([
                        'error' => true,
                        'data'  => $model->getErrors()
                    ]);
                }
        }
        return json_encode([
            'error' => true,
            'data'  => ''
        ]);
    }
	
	function actionUserLoadLocationForm()
	{
		if(!Yii::$app->request->isAjax || Yii::$app->user->isGuest){
			die("valid!");
		}
		$result	= CredentialLocation::find()
		->where(['user_id'=>\Yii::$app->user->identity->id])
		->one();
		try {
			return $this->renderAjax('user-load-location-form', [
				'model' => $result,
			]);
		} catch (\Exception $e) {
			return $this->jsonOut(true, 'fail', $e->getMessage());
		}
	}
	
	function actionUserLoadEducationForm()
	{
		if(!Yii::$app->request->isAjax || Yii::$app->user->isGuest){
			die("valid!");
		}
		$result	= CredentialEducation::find()->where(['user_id'=>\Yii::$app->user->identity->id])->one();
		try {
			return $this->renderAjax('user-load-education-form', [
				'model' => $result,
			]);
		} catch (\Exception $e) {
			return $this->jsonOut(true, 'fail', $e->getMessage());
		}
	}
	
	function actionUserLoadEmploymentForm()
	{
		if(!Yii::$app->request->isAjax || Yii::$app->user->isGuest){
			die("valid!");
		}
		$result	= CredentialEmployment::find()->where(['user_id'=>\Yii::$app->user->identity->id])->one();
		try {
			return $this->renderAjax('user-load-employment-form', [
				'model' => $result,
			]);
		} catch (\Exception $e) {
			return $this->jsonOut(true, 'fail', $e->getMessage());
		}
	}
	
	public function actionTooltipProfilesUser()
	{
		try{
			$id 	= 16;//(int)crequest()->post("id");
			$result = User::findOne($id);
			if (!empty($result)) {
                return $this->renderAjax('tooltip-profiles-user', [
					'model' => $result,
				]);
            } else {
               return $this->jsonOut(true, 'fail','');
            }
		}catch (\Exception $e) {
            return $this->jsonOut(true, 'fail', $e->getMessage());
        }	
	}
	
}
