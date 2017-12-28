<?php 
    use yii\widgets\ListView;
    use yii\helpers\Html;
    use common\models\Comments;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;

    foreach ($comments as $model) {
        echo $this->render('comment-item',['model' => $model]);
    }
?>
