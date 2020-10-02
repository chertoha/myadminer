<?php

namespace app\controllers;

use Yii;
use app\models\ItemFeature;
use app\models\ItemFeatureSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\FeatureValue;
use app\models\Item;
/**
 * ItemFeatureController implements the CRUD actions for ItemFeature model.
 */
class ItemFeatureController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ItemFeature models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemFeatureSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        $items = Item::find()->all();
        $feature_values = FeatureValue::find()->with('feature')->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'items' => $items,
            'feature_values' => $feature_values,
        ]);
    }

    /**
     * Displays a single ItemFeature model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ItemFeature model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {       
        $model = new ItemFeature();
        $feature_values = FeatureValue::find()->with('feature')->all();
        $items = Item::find()->all(); 

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->item_feature_id]);
        }
        
        
        
        if (Yii::$app->request->isAjax && Yii::$app->request->post('item_id')){
            
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $item_id = Yii::$app->request->post('item_id');  
            $sql = "SELECT * FROM item_feature itf  
                    LEFT JOIN feature_value fv ON itf.feature_val_id=fv.feature_val_id 
                    LEFT JOIN feature f ON fv.feature_id=f.feature_id 
                    WHERE itf.item_id= :item_id 
                    ORDER BY item_feature_order ASC";                    
            $data = ItemFeature::findBySql($sql, ['item_id' => $item_id])->asArray()->all();
//            $data['qqq'] = Yii::$app->request->post('item_id');
            return $data;
        }
        
//        if (Yii::$app->request->isAjax){   
//            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
//            $data['qqq'] = Yii::$app->request->post('item_id');
//            return $data;
//        }

        return $this->render('create', [
            'model' => $model,
            'feature_values' => $feature_values,
            'items' => $items,
        ]);
    }

    /**
     * Updates an existing ItemFeature model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $feature_values = FeatureValue::find()->with('feature')->all();
        $items = Item::find()->all(); 

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->item_feature_id]);
        }

        return $this->render('update', [
            'model' => $model,
            'feature_values' => $feature_values,
            'items' => $items,
        ]);
    }

    /**
     * Deletes an existing ItemFeature model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['item-feature/index']);
    }

    /**
     * Finds the ItemFeature model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ItemFeature the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ItemFeature::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
