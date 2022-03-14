<?php

//include_once ROOT.'/models/Article.php'; 
//include_once ROOT.'/models/Category.php';
//include_once ROOT.'/models/Product.php';
//include_once ROOT.'/models/Cart.php';

Class SiteController {

    public function actionIndex($id = 0) {

        // получение последних 6 статей из БД
        $latestArticles = Article::getLatetstArticles();

        $latestProducts = Product::getApiLatetstProducts();

        $countItems = Cart::countItems();

        // подключение главной страницы представления данных
        require_once ROOT.'/views/site.php';

        return true;
        
    }
}