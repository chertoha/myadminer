<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemFeatureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Features';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="item-feature-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item Feature', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'item_feature_id',
            [
                'attribute' => 'item_id',
                'label' => 'Item',
                'filter' => ArrayHelper::map($items, 'item_id', 'item_name'),
                'value' => function($model) {
                    // TO DO
                    // Переписать выполнение этого кода в модель Item
                    return app\models\Item::findOne(['item_id' => $model->item_id])->item_name;
                },
            ],
            [
                'attribute' => 'feature_val_id',
                'label' => 'Feature value',
                'filter' => ArrayHelper::map($feature_values, 'feature_val_id', function($feature_values) {
                            return $feature_values->feature->feature_descriptor . ' = ' . $feature_values->feature_val;
                        }),
                'value' => function($model) {
                    // TO DO
                    // Переписать выполнение этого кода в модель Item
                    $query = app\models\FeatureValue::find()
                                    ->with('feature')
                                    ->where(['feature_val_id' => $model->feature_val_id])->one();
                    return $query->feature->feature_name . ': ' . $query->feature_val;
                },
            ],
                        
            [
                'attribute' => 'item_feature_avail',
                'label' => 'Is Value Visible',
                'filter' => ['No', 'Yes'],
                'value' => function($model){
                    // TO DO
                    // Переписать выполнение этого кода в модель Item
                    return ($model->item_feature_avail == 0) ? 'No' : 'Yes';
                },
            ],
            'item_feature_order',
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'delete' => function ($url){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url,[
                            'title' => Yii::t('app', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete?'), 
                            'data-method' => 'post', 'data-pjax' => '0',
                            'data-params' =>[
                                Yii::$app->request->csrfParam => Yii::$app->request->csrfToken,
                            ],
                        ]);
                    }
                ],
                'urlCreator' => function ($action, $model) {
                    if ($action === 'delete') {
                        $url = Url::to(['item-feature/delete', 'id' => $model->item_feature_id]);
                        return $url;
                    }
                }
            ],
    ],
    ]);
    ?>


</div>


