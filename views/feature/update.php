<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feature */

$this->title = 'Update Feature: ' . $model->feature_id;
$this->params['breadcrumbs'][] = ['label' => 'Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->feature_id, 'url' => ['view', 'id' => $model->feature_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feature-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
