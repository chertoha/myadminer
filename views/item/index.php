<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use functions\MyFunctions;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
//    echo $this->render('_search', [
//        'model' => $searchModel,
//        'brands' => $brands,
//    ]);
    ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'item_id',
            [
                'attribute' => 'brand_id',
                'label' => 'Brand Name',
                'filter' => ArrayHelper::map($brands, 'brand_id', 'brand_name'),
                'value' => function($model) {
                    // TO DO
                    // Переписать выполнение этого кода в модель Item
                    return app\models\Brand::findOne(['brand_id' => $model->brand_id])->brand_name;
                },
            ],
            'item_name',
            'item_pub_name',
            'item_short_descr',
            'item_full_descr',
            'item_title',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
