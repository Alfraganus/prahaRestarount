<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event_title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_title_cz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'event_description_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'event_description_cz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'event_photo')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
