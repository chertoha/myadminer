<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemFeature */

$this->title = 'Update Item Feature: ' . $model->item_feature_id;
$this->params['breadcrumbs'][] = ['label' => 'Item Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_feature_id, 'url' => ['view', 'id' => $model->item_feature_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-feature-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'feature_values' => $feature_values,
        'items' => $items,
    ]) ?>

</div>
