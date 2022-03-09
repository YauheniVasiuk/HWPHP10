<?php include_once ROOT.'/core/core.php'; ?>

<?php

Class Article{

    const SHOW_BY_DEFAULT = 5;

    public static function getLatetstArticles() {

        // подключение к бд
        $db = Core::getConnection();

        // запрос и получение результата
        $latestArticles = [];
        $result = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 6");
        if ($result){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $latestArticles[] = $row;
            }
        }

        return $latestArticles;

    } 

    public static function getArticleByCategoryId($id = false, $page = 1)
    {
        if($id) {
        $id = intval($id);

        // подключение к бд
        $db = Core::getConnection();

        // смещение
        $offset = ($page-1) * self::SHOW_BY_DEFAULT;

        // запрос и получение результата
        $article = [];
        $result = $db->query("SELECT * FROM posts WHERE category_id =" . $id . " ORDER BY id DESC LIMIT " . self::SHOW_BY_DEFAULT . " OFFSET " . $offset);
        if ($result){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $article[] = $row;
            }
        }

        return $article;
    }
    }

    public static function getArticleDetails($id = false) {
        
            if($id) {
            $id = intval($id);

            // подключение к бд
            $db = Core::getConnection();
    
            // запрос и получение результата
            $article = [];
            $result = $db->query("SELECT * FROM posts WHERE id=" . $id);
            if ($result){
                while($row = $result->fetch(PDO::FETCH_ASSOC)){
                    $article[] = $row;
                }
            }

            return $article;
    }
    }

    public static function getAuthor() {
        
        // подключение к бд
        $db = Core::getConnection();

        // запрос и получение результата
        $article = [];
        $result = $db->query("SELECT * FROM authors ");
        if ($result){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $article[] = $row;
            }
        }

        return $article;
    }

    public static function getTotalArticlesInCategory($id) {

        // подключение к бд
        $db = Core::getConnection();

        // запрос и получение результата
        $result = $db->query("SELECT COUNT(id) AS count FROM posts WHERE active = '1' AND category_id = ". $id);
        $total = $result->fetch(PDO::FETCH_ASSOC);

        return $total['count'];

    }

}
?>