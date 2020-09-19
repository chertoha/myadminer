<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Brand;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand_id')->dropDownList(ArrayHelper::map($brands, 'brand_id', 'brand_name'))->label('Brand name')?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true])->label('Item name') ?>

    <?= $form->field($model, 'item_pub_name')->textInput(['maxlength' => true])->label('Item public name') ?>

    <?= $form->field($model, 'item_short_descr')->textarea(['rows' => 2, 'cols' => 5])->label('Short description(150 symbols)') ?>

    <?= $form->field($model, 'item_full_descr')->textarea(['rows' => 10, 'cols' => 5])->label('Description') ?>

    <?= $form->field($model, 'item_title')->textInput(['maxlength' => true])->label('Title') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
