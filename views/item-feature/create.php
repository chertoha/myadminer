<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ItemFeature */

$this->title = 'Create Item Feature';
$this->params['breadcrumbs'][] = ['label' => 'Item Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-feature-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'feature_values' => $feature_values,
        'items' => $items,
    ]) ?>

</div>
