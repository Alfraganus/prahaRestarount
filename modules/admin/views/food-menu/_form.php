<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\foodMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-menu-form">
<div class="form-row">
  
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <div class="form-group col-md-6">
    <?= $form->field($model, 'menu_title_en')->textarea(['rows' => 5]) ?>
</div>
<div class="form-group col-md-6">
    <?= $form->field($model, 'menu_title_cz')->textarea(['rows' => 5]) ?>
    </div>
    <div class="form-group col-md-6"> <?= $form->field($model, 'food_desc_en')->textarea(['rows' => 8]) ?></div>
    <div class="form-group col-md-6">  <?= $form->field($model, 'food_desc_cz')->textarea(['rows' => 8]) ?></div>

    <div class="form-group col-md-6"> <?= $form->field($model, 'price')->textarea(['rows' => 8]) ?></div>

    <div class="form-group col-md-6"><?= $form->field($model, 'show_priority')->textarea(['rows' => 8]) ?></div>
    <div class="form-group col-md-6"><?= $form->field($model, 'food_image')->fileInput() ?></div>

    <div class="form-group col-md-6"> <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => ''])  ?></div>

    <div class="form-group" >
       <div class="form-group col-md-6" style="text-align:center"> <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?></div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
