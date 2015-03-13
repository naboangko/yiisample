<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'email_add')->textInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 225]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
