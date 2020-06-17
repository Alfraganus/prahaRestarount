<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\foodMenu */

$this->title = 'Create Food Menu';
$this->params['breadcrumbs'][] = ['label' => 'Food Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
