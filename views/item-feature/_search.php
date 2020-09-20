<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemFeatureSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-feature-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_feature_id') ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'feature_val_id') ?>

    <?= $form->field($model, 'item_feature_avail') ?>

    <?= $form->field($model, 'item_feature_order') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
