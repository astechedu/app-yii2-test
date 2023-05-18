<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\web\Request;
use app\models\Product;
//use app\models\Product;

class ProductController extends Controller
{
    

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $product = Product::find()->all();

        //print_r($product);

        return $this->render('index', [
            'products' => $product
        ]);
    }

   
 

}
