<?php

//include_once ROOT.'/models/Article.php'; 
//include_once ROOT.'/models/Category.php';
//include_once(ROOT.'/components/Pagination.php');

Class catalogController {

    public function actionIndex() {

        // получение списка категорий из БД
        $categoriesList = Category::getCategoriesList();

        // получение последних 6 статей из БД
        $latestArticles = Article::getLatetstArticles();

        // подключение динамической страницы категорий 
        require_once ROOT.'/articles/index.php';

        return true;
    }

    public function actionCategory($categoryId, $page = 1) {

        // получение списка категорий из БД
        $categoriesList = Category::getCategoriesList();

        // получение последних 6 статей из БД
        $latestArticles = Article::getLatetstArticles();

        // получение статей по номеру категории из БД
        $articles = Article::getArticleByCategoryId($categoryId, $page);

        // получение общего количества статей из категории
        $total = Article::getTotalArticlesInCategory($categoryId);

        // пагинация найденная в интернете
        $pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');

        // подключение динамической страницы определенной категории статей 
        require_once ROOT.'/articles/section.php';

        return true;
    }

}

