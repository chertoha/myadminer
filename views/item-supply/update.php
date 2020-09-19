<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemSupply */

$this->title = 'Update Item Supply: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Item Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->item_supply_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-supply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
