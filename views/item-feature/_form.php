<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;



/* @var $this yii\web\View */
/* @var $model app\models\ItemFeature */
/* @var $form yii\widgets\ActiveForm */
?>
<?= Html::csrfMetaTags() ?>

<div class  ="item-feature-form">
    <div class="col-md-3">
    <?php $form = ActiveForm::begin(); ?>
    
    <?= Html::csrfMetaTags() ?>
        
    <?= $form->field($model, 'item_id')
            ->dropDownList(ArrayHelper::map($items, 'item_id', 'item_name'), ['prompt' => 'Select Item'])->label('Items')
            ?>

    <?= $form->field($model, 'feature_val_id')
            ->dropDownList(ArrayHelper::map($feature_values, 'feature_val_id', function($feature_values){
                return $feature_values->feature->feature_descriptor.' = '.$feature_values->feature_val;
            }), ['prompt' => 'Select Feature Value'])->label('Feature Values')
            ?>

    <?= $form->field($model, 'item_feature_avail')
                    ->dropDownList([ '0' => 'No', '1' => 'Yes', ], ['value' => '1'])
                    ->label('Is Item Feature Available')
                    ?>

    <?= $form->field($model, 'item_feature_order')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    
    <div class="col-md-1">
        
    </div>
    
    <div class="col-md-8" id="itemfeature-tab">
        
    </div>
    

</div>

<?php
//$csrf_param = Yii::$app->request->csrfParam;
//$csrf_token = Yii::$app->request->csrfToken;
//functions\MyFunctions::vardump($csrf_param);
//functions\MyFunctions::vardump($csrf_token);
?>


