<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\FoodCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Food Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Food Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
