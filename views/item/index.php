<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use functions\MyFunctions;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
//    echo $this->render('_search', [
//        'model' => $searchModel,
//        'brands' => $brands,
//    ]);
    ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'item_id',
            [
                'attribute' => 'brand_id',
                'label' => 'Brand Name',
                'filter' => ArrayHelper::map($brands, 'brand_id', 'brand_name'),
                'value' => function($model) {
                    // TO DO
                    // Переписать выполнение этого кода в модель Item
                    return app\models\Brand::findOne(['brand_id' => $model->brand_id])->brand_name;
                },
            ],
            'item_name',
            [
                'attribute' => 'item_img',
                'label' => 'Image',
                'format' => 'image',
                'value' => function($model){
//                    return Url::to('@img/item/'.$model->item_img);
                    return Url::to('@img/item/'.$model->item_img);
                },
            ],
            'item_pub_name',
            'item_short_descr',
            'item_full_descr',
            'item_title',
            [
                'class' => 'yii\grid\ActionColumn',
//                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function($url){
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url,[
                            'title' => 'View',
                            'data-pjax' => '0',                            
                        ]); 
                    },
                    
                    'update' => function($url){
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url,[
                            'title' => 'Update',
                            'data-pjax' => '0',                            
                        ]); 
                    },        
                            
                    'delete' => function($url){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url,[
                            'title' => Yii::t('app', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete?'), 
                            'data-method' => 'post', 
                            'data-pjax' => '0',
                            'data-params' =>[
                                Yii::$app->request->csrfParam => Yii::$app->request->csrfToken,
                            ],
                        ]);
                    },
                ],
                'urlCreator' => function ($action, $model) {
                    switch ($action){
                        case 'view': {
                            return Url::to(['item/view', 'id' => $model->item_id]);
                        } 
                        case 'update': {
                            return Url::to(['item/update', 'id' => $model->item_id]);
                        } 
                        case 'delete': {
                            return Url::to(['item/delete', 'id' => $model->item_id]);
                        } 
                    }
                }
            ],
        ],
    ]);
    ?>


</div>
