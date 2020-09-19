<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Brand;
use app\models\ItemSupply;

/**
 * Description of ProductsController
 *
 * @author Anton
 */
class ProductController extends Controller{
    
    
    public function actionItem(){
        
        $items = ItemSupply::find()->joinWith('brand')->asArray()->all();
        
        return $this->render('item', compact('items'));
    }
    
    public function actionBrand(){
        
        $brands = Brand::find()->all();
//        var_dump($brands);
        return $this->render('brand', compact('brands'));
    }
    
    public function actionSupplier(){
        return $this->render('supplier');
    }
    
}
