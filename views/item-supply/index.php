<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSupplySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Supplies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-supply-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item Supply', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'item_supply_id',
            'name',
//            'brand_id',
            'brand.name',
//            'brand.descriptor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
