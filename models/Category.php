<?php include_once ROOT.'/core/core.php'; ?>

<?php

Class Category {

    public static function getCategoriesList() {

        // подключение к бд
        $db = Core::getConnection();

        $getCategoriesList = [];

        // запрос и получение результата
        $result = $db->query("SELECT * FROM categories");
        if ($result){
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $getCategoriesList[] = $row;
            }
        }

        return  $getCategoriesList;
    }

}