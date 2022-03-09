<?php

include_once ROOT.'/models/Article.php'; 
include_once ROOT.'/models/Category.php';

Class SiteController {

    public function actionIndex() {

        // получение последних 6 статей из БД
        $latestArticles = Article::getLatetstArticles();

        // подключение главной страницы представления данных
        require_once ROOT.'/views/site.php';

        return true;
        
    }
}