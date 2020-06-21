<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\foodMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-menu-form">
>
  
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    
    <?= $form->field($model, 'menu_title_en')->textarea(['rows' => 5]) ?>


    <?= $form->field($model, 'menu_title_cz')->textarea(['rows' => 5]) ?>
   
    < <?= $form->field($model, 'food_desc_en')->textarea(['rows' => 8]) ?>
    <?= $form->field($model, 'food_desc_cz')->textarea(['rows' => 8]) ?>
   
    <?= $form->field($model, 'price')->textarea(['rows' => 8]) ?>
<?= $form->field($model, 'show_priority')->textarea(['rows' => 8]) ?>
   ><?= $form->field($model, 'food_image')->fileInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => ''])  ?></div>
    <?php
        $data = \yii\helpers\ArrayHelper::map(\app\models\FoodCategory::find()->all(),'id','category_name')
        ?>
        <?= $form->field($model, 'category_id')->dropDownList($data) ?>
      

       <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    

    <?php ActiveForm::end(); ?>

</div>
