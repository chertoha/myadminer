<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // echo $form->field($model, 'item_id') ?>

    <?php  echo $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map($brands, 'brand_id', 'brand_name'))->label('Brand name') ?>

    <?php //  echo $form->field($model, 'item_name') ?>

    <?php // echo $form->field($model, 'item_pub_name') ?>

    <?php // echo $form->field($model, 'item_short_descr') ?>

    <?php // echo $form->field($model, 'item_full_descr') ?>

    <?php // echo $form->field($model, 'item_title') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
