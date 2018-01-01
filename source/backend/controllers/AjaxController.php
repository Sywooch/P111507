<?php
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use common\models\Topics;
class AjaxController extends Controller
{
    public function actionGenerateslugtitle()
    {
        $title = Yii::$app->request->post('title');
        $urlSlug = slug($title);
        echo  $urlSlug;
    }
	public function actionSearchTopics()
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
}
?>