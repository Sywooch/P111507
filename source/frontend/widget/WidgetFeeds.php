<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\TopicBookmarks;

class WidgetFeeds extends Widget
{
    public $view = "widget-feeds";
    public $limit = 15;
    public function run()
    {
        $query = TopicBookmarks::find()
        ->innerJoinWith('topics')
        ->where(['user_id'=>Yii::$app->user->identity->id])
        ->orderBy('create_time', SORT_DESC)
        ;
        $models = $query->limit($this->limit)->all();
        return $this->render($this->view, ['models' => $models]);
    }
}
