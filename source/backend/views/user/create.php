<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = 'Thêm mới Người dùng';
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

        <?= $form->field($model, 'username') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>
    
        <?= $form->field($model, 'repassword')->passwordInput() ?>

        <?= $form->field($model, 'email') ?>

	<?= $form->field($model, 'status')->radioList(array(10 => 'ACTIVE', 0 => 'NOT ACTIVE')); ?>

        <?php 
        $strwhere = 'type = 1';
        if (Yii::$app->user->identity->id != 2) {
            $strwhere .= ' and name != "admin"';
        }
        echo $form->field($model, 'role')->dropDownList(ArrayHelper::map(\backend\models\AuthItem::find()->where($strwhere)->orderBy('name asc')->all(), 'name', 'description'), ['prompt' => 'Chọn Role cho User']) 
        ?>

        <div class="form-group">
            <?= Html::submitButton('Thêm mới', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
