<?php 
    namespace frontend\controllers;

use frontend\components\FrontendController;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;
use frontend\models\SearchModel;
use frontend\models\CommentModel;
use common\models\Comments;
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

    public function actionComment()
    {
        try {
            $model = new CommentModel;
            $model->value = crequest()->post('value');
            $model->id = crequest()->post('question_id');
            $model->type = Comments::TYPE_QUESTIONS;
            if ($model->validate()) {
                $result = $model->craeteComment();
                return $this->jsonOut(false, 'success', $result);
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
}
