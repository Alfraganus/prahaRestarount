<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class="col-md-9">
    <div class="tab-content">

    <?= $form->field($model, 'event_title_en')->textarea(['rows'=>4]) ?>

    <?= $form->field($model, 'event_title_cz')->textarea(['rows'=>4]) ?>

    <?= $form->field($model, 'event_description_en')->textarea(['rows' => 8]) ?>

    <?= $form->field($model, 'event_description_cz')->textarea(['rows' => 8]) ?>

    <?=$form->field($model,'event_photo')->fileInput();?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
