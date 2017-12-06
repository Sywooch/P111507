<?php

namespace backend\controllers;

use Yii;
use common\models\Questions;
use backend\models\QuestionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\extmodels\UploadForm;
/**
 * QuestionsController implements the CRUD actions for Questions model.
 */
class QuestionsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Questions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuestionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Questions model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Questions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Questions();
        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = Yii::$app->user->identity->id;
			//SET IMAGES
            $modelUpload = new UploadForm();
			$fileImgName ="";
            if ($model->social_images != "") {
                $modelUpload->file = UploadedFile::getInstance($model, 'social_images');
				
				$fileImgName = vietnamese_permalink($model->social_images).'_'. time();
                if ($modelUpload->validate()) {                
                    $modelUpload->file->saveAs(Yii::getAlias('@frontend').'/web/uploads/questions/' . $fileImgName . '.' . $modelUpload->file->extension);
                }
				$model->social_images = $fileImgName . '.' . $modelUpload->file->extension;
            }
            //END UPLOAD IMAGES
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Questions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model 	= $this->findModel($id);
		$oldImg = $model->social_images;
        if ($model->load(Yii::$app->request->post())) 
		{
			//SET IMAGES
            $modelUpload 		= new UploadForm();
            $modelUpload->file 	= UploadedFile::getInstance($model, 'social_images');
            if(isset($modelUpload->file) && $modelUpload->validate() && count($modelUpload->file)>0)
            {
                if(!empty($oldImg) || $oldImg !='')
                {
                    if(file_exists(Yii::getAlias('@frontend').'/web/uploads/questions/'.$oldImg))
                    {
                        unlink(Yii::getAlias('@frontend').'/web/uploads/questions/'.$oldImg); 
                    }
                }
				$fileImgName 			= vietnamese_permalink($model->title).'_'. time();
                $modelUpload->file->saveAs(Yii::getAlias('@frontend').'/web/uploads/questions/'.$fileImgName.'.'.$modelUpload->file->extension);
                $model->social_images 	= $fileImgName . '.' . $modelUpload->file->extension;
            }
            else
            {
                $model->social_images = $oldImg;
            }
            //END UPLOAD IMAGES
            if($model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
			}else
			{
				return $this->render('update', [
					'model' => $model,
				]);
			}
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Questions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
	
	/** UPDATE EDIT FLAG **/
	public function actionAjaxCensorFlag(){
		$id 	 = Yii::$app->request->post('id');
		$isCheck = Yii::$app->request->post('isCheck');
		$model 	 = Questions::findOne($id);
		if(!empty($model)){
			if($isCheck == 1){
				$model->censor_flag = 1;
				if($model->validate()){
					$model->save();
					return json_encode([
						'error' => false,
						'data'	=> Questions::find()->where(["id"=>$id])->asArray()->one(),
						'mess'	=> 'Cập nhật thành công',
						'item'  => 'btnedit-'.$id
					]);
				}
			}
		}
		return json_encode([
			'error' => true,
			'data'	=> '',
			'mess'	=> 'Cập nhật thất bại'
		]);
	}

    /**
     * Finds the Questions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Questions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Questions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
