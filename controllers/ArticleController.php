<?php

//include_once ROOT.'/models/Article.php'; 
//include_once ROOT.'/models/Category.php';

    Class ArticleController {

        public  static function actionView($id) {

            // получение последних 6 статей из БД
            $latestArticles = Article::getLatetstArticles();

            // получение данных о статье по номеру из БД
            $articleDetails = Article::getArticleDetails($id);

            // получение данных авторов статей из БД
            $author = Article::getAuthor();

            // подключение динамической страницы статьи 
            require_once ROOT.'/articles/detail.php';

            return true;

        }

    }
