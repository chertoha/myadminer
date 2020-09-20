<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ItemFeature */

$this->title = $model->item_feature_id;
$this->params['breadcrumbs'][] = ['label' => 'Item Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="item-feature-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->item_feature_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->item_feature_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'item_feature_id',
            'item_id',
            'feature_val_id',
            'item_feature_avail',
            'item_feature_order',
        ],
    ]) ?>
    
    <p>
        <?= Html::a('Create Item Supply', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
