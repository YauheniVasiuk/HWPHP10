<?php 

spl_autoload_register('myAutoload');

function myAutoload($class_name) 
{

    $arrayPath = [

        '/components/',
        '/models/'
    ];

    foreach($arrayPath as $path) {
        $path = ROOT . $path . $class_name . '.php';
        
        if(file_exists($path)) {
            include_once($path);
        }
    }

}