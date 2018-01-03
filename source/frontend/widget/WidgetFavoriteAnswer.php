<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetFavoriteAnswer extends Widget
{
    public $view = "favorite-answer";
    public $id;
    public $count;
    public $isFavorite;
    public function run()
    {
        return $this->render($this->view, ['id' => $this->id, 'count' => $this->count, 'isFavorite' => $this->isFavorite]);
    }
}
