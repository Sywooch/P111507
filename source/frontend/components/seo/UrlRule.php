<?php
namespace frontend\components\seo;
use Yii;
use yii\web\UrlRuleInterface;
use yii\base\Object;
use yii\web\NotFoundHttpException;
use common\models\Answers;
use common\models\Questions;
use common\models\User;
use common\models\Topics;
class UrlRule extends Object implements UrlRuleInterface
{
    public function createUrl($manager, $route, $params)
    {
		
        if ($route === 'question/unanswered') {
            if (isset($params["id"])) {
				$model = Questions::findOne($params["id"]);
				if (empty($model)) {
					throw new NotFoundHttpException();
				}
                return "/unanswered". '/' . $model->slug;
            }
        }
		
		if ($route === 'question/answered') {
            if (isset($params['id'])) {
				$model = Questions::findOne($params["id"]);
				if (empty($model)) {
					throw new NotFoundHttpException();
				}
                return "/". $model->slug;
            }
        }
		
		if ($route === 'answer/detail') {
			$model 	= 	Answers::findOne($params["id"]);
			$slug 	=	$model->question->slug;
			$user	= 	$model->user->slug;
            return $slug."/answer/".$user;
        }
		
		/** TOPICS **/
		if ($route === 'topic/detail') {
			$model 	= 	Topics::findOne($params["id"]);
			$slug 	=	$model->slug;
            return "topic/".$slug;
        }
		
		/** THONG TIN TAI KHOAN **/
		if ($route === 'profiles/index') {
			$model 	= 	User::findOne($params["id"]);
			$slug 	=	$model->slug;
            return "user/".$slug;
        }
		
		if ($route === 'profiles/questions') {
			$model 	= 	User::findOne($params["id"]);
			$slug 	=	$model->slug;
            return "user/".$slug.'/questions';
        }
		
        return false; // this rule does not apply
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
		
		/** MODULE AJAX **/
		if (preg_match('%^(?P<module>ajax)\/(?P<action>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			if($matches["module"]!=='ajax'){
				throw new NotFoundHttpException();
			}
			$params = $request->post();
			return [$matches["module"].'/'.$matches["action"], $params];
		}
		
		/** MODULE TOPIC **/
		if (preg_match('%^(?P<module>topic)\/(?P<slug>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			if(!isset($matches["module"]) ||  !isset($matches["slug"])){
				throw new NotFoundHttpException();
			}
			$modelTopic = Topics::findTopicBySlug($matches["slug"]);
			$params = [
				'slug'	=> $matches["slug"],
				'id'	=> $modelTopic->id	
			];
			return ['topic/detail', $params];
		}
		
		/** MODULE USER PROFILES QUESTIONS **/
		if (preg_match('%^(?P<module>user)\/(?P<userslug>[._\sA-Za-z-0-9-]+)\/(?P<action>questions)?%', $pathInfo, $matches)) {
			if(!isset($matches["userslug"])){
				throw new NotFoundHttpException();
			}
			//var_dump($matches);exit;
			$modelUser = User::findUserBySlug($matches["userslug"]);
			$params = [
				'slug'	=> $matches["userslug"],
				'id'	=> $modelUser->id	
			];
			return ['profiles/'.$matches["action"], $params];
		}
		
		/** MODULE USER PROFILES INDEX **/
		if (preg_match('%^(?P<module>user)\/(?P<userslug>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			
			if(!isset($matches["userslug"])){
				throw new NotFoundHttpException();
			}
			$modelUser = User::findUserBySlug($matches["userslug"]);
			if(empty($modelUser)){
				throw new NotFoundHttpException();
			}
			$params = [
				'slug'	=> $matches["userslug"],
				'id'	=> $modelUser->id	
			];
			return ['profiles/index', $params];
		}
		
		
		
		/** MODULE CAU HOI CHUA CO CAU TRA LOI **/
        if (preg_match('%^(?P<module>unanswered)\/(?P<slug>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			if(!isset($matches["slug"])){
				throw new NotFoundHttpException();
			}
			$params = [
				"slug"	=> $matches["slug"]
			];
			return ['question/unanswered', $params];
        }
		
		/** CHI TIET CAU TRA LOI **/
		if (preg_match('%^(?P<slug>[._\sA-Za-z-0-9-]+)\/(?P<module>answer)\/(?P<user>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			
			if(isset($matches["slug"]) && isset($matches["user"])){
				$route = "answer/detail";
			}
			$modelQuestion 	= Questions::findQuestionBySlug($matches["slug"]);
			$modelUser	   	= User::findUserBySlug($matches["user"]);
			$modelAnswer	= Answers::find()->where([
				"question_id"	=>	$modelQuestion->id,
				"user_id"		=> 	$modelUser->id
			])->one();
			if(empty($modelAnswer)){
				return false;
			}
			$params = [
				"slug"		=> $matches["slug"],
				"module"	=> $matches["module"],
				"user"		=> $matches["user"],
				"id"		=> $modelAnswer->id
			];
			
			return [$route, $params];
        }
		
		/** preg match cau hoi da duoc tra loi **/
		if (preg_match('%^(?P<slug>[._\sA-Za-z-0-9-]+)?%', $pathInfo, $matches)) {
			//var_dump($matches);
			$params = [
				"slug"	=> $matches["slug"]
			];
			return ['question/answered', $params];
        }
		
		
        return false; // this rule does not apply
    }
}