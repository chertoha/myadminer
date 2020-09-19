<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FeatureValue */

$this->title = 'Create Feature Value';
$this->params['breadcrumbs'][] = ['label' => 'Feature Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feature-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'features' => $features,
    ]) ?>

</div>
