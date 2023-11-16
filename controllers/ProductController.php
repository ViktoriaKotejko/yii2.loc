<?php


namespace app\controllers;


use app\models\Product;
use yii\web\NotFoundHttpException;

class ProductController extends AppController
{
    public function actionView($id){
        $product = Product::findOne($id);
        if (empty($product)){
            throw new NotFoundHttpException('Такого подукта нет');
        }
        $this->setMeta($product->title, $product->keywords, $product->description);

        return $this->render('view', compact('product', ));


    }


}