<?php


namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Catalog;
use app\models\Product;

class CatalogController extends Controller 
{
    public function actionIndex(){
        $products=Yii::$app->db->createCommand("select * from product")->queryAll();
        
        return $this->render('index',['arr'=>$products]);
    }

    public function actionAdd(){
        $model = new Product();
        $model->name = "burger";
        $model->price = 120;
        $model->short_description = "big tasty burger";
        $model->description = "burger";
        $model->customer_id = 1;
        $model->save();

    }
}
