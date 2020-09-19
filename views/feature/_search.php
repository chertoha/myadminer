<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FeatureSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feature-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'feature_id') ?>

    <?= $form->field($model, 'feature_descriptor') ?>

    <?= $form->field($model, 'feature_name') ?>

    <?= $form->field($model, 'feature_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
