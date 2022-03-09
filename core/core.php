<?php

Class Core{

    public static function getConnection() {

        // парсинг данных подлючения к бд из core.ini
        $iniData = parse_ini_file('core.ini');

        // подключение к бд через PDO
        $db = new PDO("mysql::host={$iniData['host']};dbname={$iniData['db']}",$iniData['user'],$iniData['pass']);

        return $db;

    }

}

