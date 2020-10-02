<?php

namespace app\controllers;

use Yii;
use app\models\Item;
use app\models\ItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Brand;
use yii\web\UploadedFile;
use app\models\UploadImage;
/**
 * ItemController implements the CRUD actions for Item model.
 */
class ItemController extends Controller
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
     * Lists all Item models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $brands = Brand::find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'brands' => $brands,
        ]);
    }

    /**
     * Displays a single Item model.
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
     * Creates a new Item model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Item();
        $imageModel = new UploadImage;        
        $brands = Brand::find()->all();
        
        if ($this->saveItem($model, $imageModel)) {
            return $this->redirect(['view', 'id' => $model->item_id]);
        }
//        if (Yii::$app->request->isPost) {     
//            if (empty($_FILES)){
//                if ()
//            }
//            $imageModel->imageFile = UploadedFile::getInstance($imageModel, 'imageFile');            
//            if ($imageModel->upload('/item/') && $model->load(Yii::$app->request->post())) {
//                $model->item_img = $imageModel->imageName;
//                $model->save();
//                return $this->redirect(['view', 'id' => $model->item_id]);
//            }
//        }
        
        return $this->render('create', [
            'model' => $model,
            'brands' => $brands,
            'imageModel' => $imageModel,
            
        ]);
    }

    /**
     * Updates an existing Item model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imageModel = new UploadImage;        
        $brands = Brand::find()->all();
        
        if ($this->saveItem($model, $imageModel)) {
            return $this->redirect(['view', 'id' => $model->item_id]);
        }

//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->item_id]);
//        }

        return $this->render('update', [
            'model' => $model,
            'brands' => $brands,
            'imageModel' => $imageModel,
        ]);
    }

    /**
     * Deletes an existing Item model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Item model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Item the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    private function saveItem($model, $imageModel){
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {     
            if ($_FILES['UploadImage']['name']['imageFile'] == ''){//TO DO // говно код
                $model->save();
            }else{
                $imageModel->imageFile = UploadedFile::getInstance($imageModel, 'imageFile');
                if ($imageModel->upload('/item/')) {
                    $model->item_img = $imageModel->imageName;
                    $model->save();                    
                }
            }   
            return true;            
        }else{
            return false;
        }
    }
    
}
