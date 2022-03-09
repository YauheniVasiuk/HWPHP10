<?php

return array(

    //шаблоны путей для URI
    'catalog' => 'catalog/index', // actionIndex in CatalogController
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory in CatalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController
    'article/([0-9]+)' => 'article/view/$1', // actionView in ArticleController

    '' => 'site/index', // actionIndex in SiteController
);
