<?php 
    use yii\helpers\Html;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    // dd($model->answers->user);
?>
<?php 
    if (!empty($model->answers)) {
        echo $this->render('_question_premium', ['model' => $model]);
    } else {
        echo $this->render('_question_basic', ['model' => $model]);
    }
?>