<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemSupply */

$this->title = 'Create Item Supply';
$this->params['breadcrumbs'][] = ['label' => 'Item Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-supply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
