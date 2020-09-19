<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Feature */

$this->title = $model->feature_id;
$this->params['breadcrumbs'][] = ['label' => 'Features', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="feature-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->feature_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->feature_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'feature_id',
            'feature_descriptor',
            'feature_name',
            'feature_description',
        ],
    ]) ?>

    <p>
        <?= Html::a('Create new feature', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
</div>
