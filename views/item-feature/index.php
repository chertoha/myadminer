<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemFeatureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Features';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-feature-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item Feature', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'item_feature_id',
            'item_id',
            'feature_val_id',
            'item_feature_avail',
            'item_feature_order',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
