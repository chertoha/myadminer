<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FeatureValueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Feature Values';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feature-value-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Feature Value', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'feature_val_id',
            'feature_id',
            'feature.feature_descriptor',
            'feature.feature_name',            
            'feature_val',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
