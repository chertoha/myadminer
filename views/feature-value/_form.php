<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\FeatureValue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feature-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'feature_id')
            ->dropDownList(ArrayHelper::map($features, 'feature_id', 'feature_name')) 
            ->label('Feature Name')
            ?>

    <?= $form->field($model, 'feature_val')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
