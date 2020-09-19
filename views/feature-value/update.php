<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FeatureValue */

$this->title = 'Update Feature Value: ' . $model->feature_val_id;
$this->params['breadcrumbs'][] = ['label' => 'Feature Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->feature_val_id, 'url' => ['view', 'id' => $model->feature_val_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="feature-value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'features' => $features,
    ]) ?>

</div>
