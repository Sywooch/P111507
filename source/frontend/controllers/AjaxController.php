<?php 
    namespace frontend\controllers;

use frontend\components\FrontendController;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use common\models\UserTopicFollow;
use common\models\Topics;
use common\models\User;
use common\models\KnowsAbout;
use common\models\Questions;
use common\models\TopicBookmarks;
use yii\helpers\ArrayHelper;
use common\models\Answers;
use common\models\Comments;
use common\models\Upvotes;
use common\models\UserQuestionFollow;
use common\models\UserQuestionPass;
use common\models\CredentialEmployment;
use common\models\CredentialEducation;
use common\models\CredentialLocation;
use garyjl\simplehtmldom\SimpleHtmlDom;
use yii\helpers\HtmlPurifier;
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
    public function actionBatchedLogPost()
    {
        $arrayResult = array(
            "value" => null,
            "pmsg"  => null
        );
        return json_encode($arrayResult);
    }
	
	/** FOLLOW TOPIC **/
    public function actionFollow()
    {
        if (Yii::$app->user->isGuest) {
            return 'not allow';
        } else {
            $topics = Yii::$app->request->post('topics');
            /*$topics = explode(',', $topics);*/
            $user_id = Yii::$app->user->identity->id;
            if (UserTopicFollow::setUserFollow($topics, $user_id)
                && User::setRegisterStatus(User::REGISTER_STATUS_STEP2, $user_id)) {
                return json_encode(['error' => false, 'msg' => 'success', 'data' => null]);
            } else {
                return json_encode(['error' => true, 'msg' => 'Interval server errors', 'data' => null]);
            }
        }
    }

    public function actionSearchTopics()
    {
        $key = Yii::$app->request->post('key');
        if (!empty($key)) {
            $data = Topics::getTopicsByKey(convert_vi_to_en($key));
            return json_encode($data);
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

    public function actionCreateTopics()
    {
        $key = Yii::$app->request->post('key');
        return json_encode(Topics::createTopicKnow($key));
    }

    public function actionTopicKnow()
    {
        if (!Yii::$app->user->isGuest) {
            $topics = Yii::$app->request->post('topics');
            $user_id = Yii::$app->user->identity->id;
            $know_about = true;
            if (!empty($topics) && $topics != '') {
                $topics = explode(',', $topics);
                $know_about = KnowsAbout::saveUserKnowTopic($topics, $user_id);
            }
            if ($know_about !== false && User::setRegisterStatus(User::REGISTER_STATUS_STEP3, $user_id) !== false) {
                return json_encode(['error' => false, 'msg' => null, 'data' => null]);
            } else {
                return json_encode(['error' => true, 'msg' => 'Interval server error', 'data' => null]);
            }
        } else {
            return json_encode("not allow");
        }
    }

    public function actionYourInterest()
    {
        $topics = Topics::find()
            ->asArray()
            ->all();
        return $this->renderAjax('your-interest', ['topics' => $topics]);
    }

    public function actionYourSelector()
    {
        return $this->renderAjax('your-selector');
    }
    
    public function actionReadMore()
    {
        return $this->renderAjax('read-more');
    }

    public function actionAddQuestion()
    {
        if (Yii::$app->user->isGuest) {
            return json_encode([
                'error'=> true,
                'msg' => '401',
            ]);
        }

        $model = new Questions();

        if ($model->load(Yii::$app->request->post())) {
            /** 05-30-2017 KEN EDIT **/
            $old_question = Questions::find()->where(['title' => $model->title])->asArray()->one();
            if (!empty($old_question)) {
                    return json_encode([
                        'error' => false,
                        'msg' => 'success1',
                        'data' => $old_question
                    ]);
            }
			$model->censor_flag = $model::DEFAULT_CENSOR_FAG;
			$model->status 		= $model::DEFAULT_STATUS;
            $model->link('user', Yii::$app->user->identity);
            if (!empty($model->validate())) {
                if ($model->save() !== false) {
                    /**KEN ADD TOPIC FOR QUESTIONS**/
                    //$modelTopic     = new Topics();
                    //$objectTopcis   = $modelTopic->suggetTopics($model->title);
                    //$modelQuestion  = new Questions();
					//$object         = json_decode($objectTopcis);
                    //$modelQuestion->addQuestionToTopics($model->id, $object->data);
                    //$new_question = Questions::find()->where(['id' => $model->id])->asArray()->one();
                    /**END ADD TOPIC FOR QUESTION**/
                    return json_encode([
                        'error' => false,
                        'msg' => 'success2',
                        'data' => $new_question
                    ]);
                } else {
                    return json_encode([
                        'error' => true,
                        'msg' => 'Interval server error',
                    ]);
                }
            } else {
                return json_encode([
                    'error'=> true,
                    'msg' => '400',
                    'data' => $model->getErrors()
                ]);
            }
        } else {
            return json_encode([
                'error'=> true,
                'msg' => '400',
            ]);
        }
    }

    public function actionTooltipCat()
    {
        $model = Topics::find()->where(['id' => Yii::$app->request->post('cat')])->one();
        $count = UserTopicFollow::find()->where(['topic_id'=>$model->id])->count();
        return $this->renderAjax('tooltip-cat', ['model' => $model, 'count' => $count]);
    }

	/** FOLLOW TOPIC TOGGLE **/
    public function actionFollowToggle()
    {
        $model = UserTopicFollow::find()
            ->where(['topic_id' => Yii::$app->request->post('parram_1'), 'user_id' => Yii::$app->user->identity->id])
            ->one();
        if (!empty($model)) {
            $model->delete();
            return json_encode([
                'error' => false,
                'msg' => 'remove successful',
                'type' => 'remove'
            ]);
        } else {
            $model = new UserTopicFollow;
            $model->topic_id = Yii::$app->request->post('parram_1');
            $model->user_id = Yii::$app->user->identity->id;
            if ($model->save()) {
                return json_encode(['error' => false, 'msg' => 'insert successfull', 'type' => 'insert']);
            }
        }
    }

    public function actionTooltipMenuFeed()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $topics_bookmarks = TopicBookmarks::find()
        ->where(['user_id' => Yii::$app->user->identity->id])->select('topic_id')->asArray()->all();
        $ids_bookmarks = ArrayHelper::getColumn($topics_bookmarks, 'topic_id');

        $models = UserTopicFollow::find()
        ->where(['user_id' => Yii::$app->user->identity->id])
        ->andWhere(['not in','topic_id',$ids_bookmarks])
        ->all();
        return $this->renderAjax('tooltip-menu-feed', ['models' => $models]);
    }

    public function actionRemoveTopicFollow()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $topic_id = Yii::$app->request->post('topic_id');
        $model = UserTopicFollow::find()
        ->where([
            'topic_id' => $topic_id,
            'user_id' => Yii::$app->user->identity->id
        ])
        ->one();
        return $model->delete();
    }

    public function actionAddBookmark()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $topic_id = Yii::$app->request->post('topic_id');
        $topic = Topics::findOne($topic_id);
        if (empty($topic)) {
            return false;
        }
        $topic_bookmark = TopicBookmarks::find()
        ->where(['user_id' => Yii::$app->user->identity->id, 'topic_id' => $topic_id])
        ->one();
        if (!empty($topic_bookmark)) {
            return false;
        }

        $tf = UserTopicFollow::find()
        ->where(['user_id' => Yii::$app->user->identity->id, 'topic_id' => $topic_id])
        ->one();

        if (empty($tf)) {
            $tf = new UserTopicFollow();
            $tf->user_id = Yii::$app->user->identity->id;
            $tf->topic_id = $topic_id;
            $tf->save();
        }
        
        $tb = new TopicBookmarks();
        $tb->user_id = Yii::$app->user->identity->id;
        $tb->topic_id = $topic_id;
        $tb->created_time = time();
 
        if ($tb->save()) {
            return '<li><a data-cat="'.$topic->id.'" class="has-qtip-cat"> '
            .$topic->title.' </a><span class="remove-feed" style="display: inline;" data-ajax="'
            .$topic->id.'">X</span></li>';
        }
    }

    public function actionSearchTopicForBookmark()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $topics_bookmarks = TopicBookmarks::find()
        ->where(['user_id' => Yii::$app->user->identity->id])->select('topic_id')->asArray()->all();

        $ids_bookmarks = ArrayHelper::getColumn($topics_bookmarks, 'topic_id');
        
        $key = Yii::$app->request->post('key');


        $models = Topics::find()
        ->where(['not in','id',$ids_bookmarks])
        ->andFilterWhere(['like', 'title', $key])
        ->all();

        return $this->renderAjax('search-topic-for-bookmark', ['models' => $models]);
    }

    public function actionRemoveTopicBookmark()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $topic_id = Yii::$app->request->post('topic_id');
        $model = TopicBookmarks::find()
        ->where([
            'topic_id' => $topic_id,
            'user_id' => Yii::$app->user->identity->id
        ])
        ->one();
        return $model->delete();
    }

    public function actionAnswerBox()
    {
        $question_id = Yii::$app->request->post('question_id');
        $model = Questions::find()->where(['id' => $question_id])->one();
        return $this->renderAjax('answer-box', ['model' => $model]);
    }

    public function actionAddAnswer()
    {
        if (Yii::$app->user->isGuest) {
            return json_encode(['error' => true]);
        }
        $answer         = Yii::$app->request->post('answer');
        $answer         = HtmlPurifier::process($answer); // 29/05/2017 -- Ken add loai bo nhung ma doc, script trong answer
        $question_id    = Yii::$app->request->post('question_id');

        $question = Questions::findOne($question_id);
        /** Check isset question and null answer, if empty => break **/
        if (empty($question) && empty($answer)) {
            return json_encode(['error' => true]);
        }
        
        $as = new Answers();
        /** Add images first **/
        $domHtml = SimpleHtmlDom::str_get_html($answer);
        $strFirstImgSrc = $domHtml->find("img",0);
        if($strFirstImgSrc !== null)
        {
            $as->images = $strFirstImgSrc->src;
        }
        /** End add images first **/
        $as->answers_text 	= $answer;
		$as->censor_flag 	= $as::DEFAULT_CENSOR_FAG;
		$as->status 		= $as::DEFAULT_STATUS;
        $as->link('question', $question);
        $as->link('user', Yii::$app->user->identity);
        if ($as->save()) {
            return json_encode([
                'error' => false,
                'data' => Answers::find()
                ->where(['id' => $as->id])
                ->asArray()
                ->one()
            ]);
        }
        return json_encode(['error' => true, 'data' => $as->getErrors()]);
    }

    public function actionLoadComment()
    {
        $id = crequest()->post('feed_id');
        $offset = crequest()->post('offset') ? crequest()->post('offset') : 0;
        $model = Questions::find()
            ->where(['id' => $id])
            ->with(['comments' => function ($q) use ($offset) {
                return $q->with(['user', 'childs'])
                    ->orderBy(['comments.create_time' => SORT_DESC])
                    ->where([
                        'comment_type' => Comments::TYPE_QUESTIONS,
                        'comment_parent_id' => null
                    ])
                    ->limit(cparams('limitLoadComment'))
                    ->offset($offset);
                    ;
            }])
            ->one();
        return $this->renderAjax('load-comment', ['model' => $model, 'offset' => $offset]);
    }

    public function actionAddCommentQuestion()
    {
        $model 			= new Comments();
        $question_id 	= Yii::$app->request->post('question_id');
        $comment 		= Yii::$app->request->post('comment');

        $question = Questions::findOne($question_id);
        if (!empty($question)) {
            $model->comment = $comment;
            $model->link('user', Yii::$app->user->identity);
            $model->link('question', $question);
            $model->comment_type = Comments::TYPE_QUESTIONS;
            if ($model->validate()) {
                if ($model->save()) {
                    return json_encode([
                        'error' => false,
                        'data' => Comments::find()->where(['id' => $model->id])->asArray()->one()
                    ]);
                } else {
                    return json_encode(500);
                }
            } else {
                return json_encode(['error' => true, 'data' => $model->getErrors()]);
            }
        }
		return json_encode(['error' => true, 'data' => '']);
    }

    public function actionTooltipProfile()
    {
        $user_id = crequest()->post('id');
        $model = User::find()->where(['id' => $user_id])->one();
        return $this->renderAjax('tooltip-profile', ['model' => $model]);
    }

    public function actionVoteQuestion()
    {
        $question_id = crequest()->post('id');
        $question = Questions::find()->where(['id' => $question_id])->one();
        $vote = Upvotes::find()->where([
            'user_id' => cuser()->id,
            'post_id' => $question->id,
            'upvote_type' => Upvotes::TYPE_QUESTIONS,
            'type' => Upvotes::TYPE_UP])
        ->one();
        if (!empty($vote)) {
            $vote->delete();
            return json_encode(['error' => false, 'data' => null]);
        } else {
            $vote = new Upvotes;
            $vote->link('user', cuser());
            $vote->link('answer', $question);
            $vote->upvote_type = Upvotes::TYPE_QUESTIONS;
            $vote->type = Upvotes::TYPE_UP;
            if ($vote->save()) {
                return json_encode([
                    'error' => false,
                    'data' => Upvotes::find()->where(['id' => $vote->id])->asArray()->one()
                ]);
            } else {
                return json_encode(['error' => true, 'data' => $vote->getErrors()]);
            }
        }
    }

    public function actionDownVoteQuestion()
    {
        $question_id = crequest()->post('id');
        $question = Questions::find()->where(['id' => $question_id])->one();
        $vote = Upvotes::find()->where([
            'user_id' => cuser()->id,
            'post_id' => $question->id,
            'upvote_type' => Upvotes::TYPE_QUESTIONS,
            'type' => Upvotes::TYPE_DOWN])
        ->one();
        if (!empty($vote)) {
            return $this->renderAjax('down-vote-question', ['model' => $vote]);
        } else {
            $vote = new Upvotes;
            $vote->link('user', cuser());
            $vote->link('answer', $question);
            $vote->upvote_type = Upvotes::TYPE_QUESTIONS;
            $vote->type = Upvotes::TYPE_DOWN;
            if ($vote->save()) {
                return $this->renderAjax('down-vote-question', ['model' => $vote]);
            }
        }
    }

    //TODO
    public function actionReport()
    {
        return $this->renderAjax('report');
    }

    public function actionUndoQuestion()
    {
        $id = crequest()->post('id');
        $vote = Upvotes::find()
        ->where(['id' => $id])->one();
        if (!empty($vote)) {
            $post_id = $vote->post_id;
            if ($vote->delete() !== false) {
                return json_encode(['error' => false, 'data' => $post_id]);
            }
        }
        return json_encode(['error' => true, 'data' => false]);
    }
    
    /* QUESTIONS FOLLOW */
    public function actionQuestionFollow()
    {
        if (Yii::$app->user->isGuest) {
            return 'not allow';
        }
		else 
		{
            $question   = Yii::$app->request->post('question_id');
            $user_id    = Yii::$app->user->identity->id;
            if (UserQuestionFollow::setUserFollow($question, $user_id)) {
                $modelQuestion      = Questions::findOne($question);
                $numFollowQuestion  = $modelQuestion->numfollow;
                return json_encode(['error' => false, 'msg' => 'success', 'data' => count($numFollowQuestion)]);
            } else {
                return json_encode(['error' => true, 'msg' => 'Interval server errors', 'data' => null]);
            }
        }
    }
    
    /* QUESTIONS UNFOLLOW */
    public function actionQuestionUnfollow()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $question   = Yii::$app->request->post('question_id');
        $user_id    = Yii::$app->user->identity->id;
        $model      = UserQuestionFollow::find()
        ->where(['question_id' => $question, 'user_id' => $user_id])
        ->one();
        if (!empty($model)) {
            $model->delete();
            $modelQuestion      = Questions::findOne($question);
            $numFollowQuestion  = $modelQuestion->numfollow;
            return json_encode(['error' => false, 'msg' => 'success', 'data' => count($numFollowQuestion)]);
        } else {
            return json_encode(['error' => true, 'msg' => 'Interval server errors', 'data' => null]);
        }
    }

    /*ADD SUB COMMENT*/
    public function actionAddSubComment()
    {
        if (Yii::$app->user->isGuest) {
            return false;
        }
        $id = crequest()->post('id');
        $comment = crequest()->post('comment');

        $pr = Comments::find()->where(['id'=> $id])->one();

        if (empty($pr)) {
            return false;
        }
        $model = new Comments();
        $model->comment_parent_id = $id;
        $model->comment = $comment;
        $model->comment_type = $pr->comment_type;
        $model->link('question', $pr->question);
        $model->link('user', cuser());

        if ($model->validate() && $model->save()) {
            return $this->renderAjax(
                'add-sub-comment',
                [ 'model' => Comments::find()->where(['id'=> $model->id])->one()]
            );
        } else {
            return false;
        }
    }

    public function actionLoadCommentChild()
    {
        return 1;
    }
    
    /* QUESTIONS PASS */
    public function actionQuestionPass()
    {
        if (Yii::$app->user->isGuest) {
            return json_encode(['error' => true, 'msg' => 'Interval server errors', 'data' => null]);
        }
        
        $question   = Yii::$app->request->post('question_id');
        $user_id    = Yii::$app->user->identity->id;
        if (UserQuestionPass::setUserPass($question, $user_id)) {
            return json_encode(['error' => false, 'msg' => 'success', 'data' => null]);
        } else {
            return json_encode(['error' => true, 'msg' => 'Interval server errors', 'data' => null]);
        }
    }

    /**
     * @function add vote for comment
     * @description if has voted then delete voted else add voted
     *
    */
    public function actionVoteComment()
    {
        $id = crequest()->post('id');
        $comment = Comments::find()->where(['id' => $id])->one();
        if (empty($comment)) {
            return false;
        }
        $upvote = Upvotes::find()
            ->where([
                'user_id' => cuser()->id,
                'post_id' => $id,
                'upvote_type' => Upvotes::TYPE_COMMENT,
                'type' => Upvotes::TYPE_UP
            ])->one();
        if (empty($upvote)) {
            $upvote = new Upvotes();
            $upvote->link('user', cuser());
            $upvote->link('comment', $comment);
            $upvote->upvote_type = Upvotes::TYPE_COMMENT;
            $upvote->type = Upvotes::TYPE_UP;
            if ($upvote->save()) {
                return json_encode([
                    'error' => false,
                    'data' => Upvotes::find()->where(['id' => $upvote->id])->asArray()->one()
                ]);
            }
        } else {
            $upvote->delete();
            return json_encode([
                'error' => false,
                'data' => null
            ]);
        }
    }

    /**
     *
     *
     *
    */
    public function actionDownVoteComment()
    {
        $id = crequest()->post('id');
        $comment = Comments::find()->where(['id' => $id])->one();
        if (empty($comment)) {
            return false;
        }
        if (!empty($comment->downVoted)) {
            $comment->downVoted->delete();
            return json_encode([
                'error' => false,
                'data' => null
            ]);
        } else {
            $upvote = new Upvotes();
            $upvote->link('user', cuser());
            $upvote->link('comment', $comment);
            $upvote->upvote_type = Upvotes::TYPE_COMMENT;
            $upvote->type = Upvotes::TYPE_DOWN;
            if ($upvote->save()) {
                return json_encode([
                    'error' => false,
                    'data' => Upvotes::find()->where(['id' => $upvote->id])->asArray()->one()
                ]);
            }
        }
    }

    public function actionAddUserEmployment()
    {
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
                $model = new credentialEmployment();
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
        $education_school   = crequest()->post("education_school");
        $education_concentration    = crequest()->post("education_concentration");
        $education_secondary_concentration  = crequest()->post("education_secondary_concentration");
        $education_degree_type  = crequest()->post("education_degree_type");
        $education_graduation_year = crequest()->post("education_graduation_year");
        
        $model_education_school                     = Topics::findOne($education_school);
        $model_education_concentration              = Topics::findOne($education_concentration);
        $model_education_secondary_concentration    = Topics::findOne($education_secondary_concentration);
        
        $user_id                                    = Yii::$app->user->identity->id;
        if(!empty($model_education_school) && isset($user_id))
        {
                $model = new CredentialEducation();
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
                $model = new CredentialLocation();
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
    
    public function actionSuggetSeach(){
        $textSearch     = crequest()->get("s");
        if(isset($data["search"]))
        {
            $textSearch = trim(strip_tags($data['search']));
        }
        $kt             = explode(" ",$textSearch);//Breaking the string to array of words
        
        $sqlTopic       = (new \yii\db\Query())
                ->select([
                    "id",
                    "title",
                    "images",
                    new Expression('"topic" as type'),
                ])
                ->from('topics')
                ->andWhere("status = 1");
        
        $sqlQuesion     = (new \yii\db\Query())
                ->select([
                    "id",
                    "title",
                    "images",
                    new Expression('"question" as type'),
                ])
                ->from('questions')
                ->andWhere("status = 1");
        while(list($key,$val)=each($kt))
        {
            if($val<>" " and strlen($val) > 0)
            {
                $sqlQuesion->andWhere(['LIKE','title',$val]);
                $sqlTopic->andWhere(['LIKE','title',$val]);
            }
        }
        $sqlQuesion->union($sqlTopic, true)->orderBy(['type' => SORT_ASC]);

        $queryM = new Query();
        $queryM->select(['*'])
        ->from(['u' => $sqlQuesion])
        ->orderBy(['type' => SORT_ASC]);
        //echo $queryM->createCommand()->getRawSql();   
                
        $dataProvider = new ActiveDataProvider([
            "query"         => $queryM,
                "pagination"    => [
                "pagesize"  => 10
            ],
        ]); 
        /* PAGER */
        print_r($dataProvider->getModels());    
    }
    
    
    public function actionSphinxSuggetTopics(){
        $textSearch     = crequest()->get("s");
        
        $sphinxSearch   = new SphinxGlobalSearch();
        $sphinxSearch->title    = $textSearch;
                
        $dataProvider = new ActiveDataProvider([
            "query"             => $sphinxSearch->getResult(),
                "pagination"    => [
                "pagesize"      => 10
            ],
        ]); 
        /* PAGER */
        foreach($dataProvider->getModels() as $model){
            echo var_dump($model).'<br/>';
        }   
    }
	
	public function actionUserUploadAvatarProfiles()
	{
		$fileImgName 	= "";
		$pathUpload    	= Yii::getAlias('@frontend').'/web/uploads/avatars/'.date('Y') . '/' . date('m').'/';
		$uid 			= \Yii::$app->user->identity->id;
		$modelUser 		= User::findOne($uid);
		$maxSize		= 5*1024*1024; //5MB
		if (!is_dir($pathUpload)) // check isset folder
		{
			BaseFileHelper::createDirectory($pathUpload, 0775, TRUE);
		}
		if(!empty($_FILES['file'])) {
			
			$validextensions 	= array("jpeg", "jpg", "png");
			$temporary 			= explode(".", $_FILES["file"]["name"]);
			$file_extension 	= end($temporary);

			if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
			) && ($_FILES["file"]["size"] < $maxSize)//Approx. 100kb files can be uploaded.
			&& in_array($file_extension, $validextensions)) {
				if ($_FILES["file"]["error"] == 0) {
					
					$fileImgName 		= slug($modelUser->username).'-'.time() .'.'. $file_extension;
					move_uploaded_file($_FILES['file']['tmp_name'], $pathUpload . $fileImgName);
					$modelUser->avatar 	= date('Y') . '/' . date('m').'/'.$fileImgName;
					$modelUser->save();
				}
			}	
				
        }
		return json_encode($modelUser);
	}
}
