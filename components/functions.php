<?php

    Class Functions {

        // инкапсулируем путь к шаблонам
        private $routes;

        public function __construct() {
            
            // подключаем шаблоны для URI
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath);
        }

        // инкапсулируем введеный URI
        private function getUri() {
            if(!empty($_SERVER['REQUEST_URI'])) {
               return trim ($_SERVER['REQUEST_URI'], '/');
            }
        }

        // основной метод обработки URI и формирования файла контроллера с необходимым методом
        public function run() {

            // получаем введенный URI
            $uri = $this->getUri();

            // сравниваем uri с паттерном routes
            foreach($this->routes as $uriPattern => $path) {

                if (preg_match("~$uriPattern~", $uri)) {

                    // получаем внутренний путь из внешнего
                    $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                    // получаем action и controller

                    $segments = explode('/', $internalRoute);

                    $controllerName = ucfirst(array_shift($segments)).'Controller';
                    
                    $actionName = 'action'.ucfirst(array_shift($segments));

                    // подключаем файл контроллера

                    $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                    
                    if(file_exists($controllerFile)){
                        include_once($controllerFile);
                    }

                    // получаем параметры для метода контроллера
                    $parameters = $segments;

                    // создаем экземпляр класса контроллера
                    $controllerObject = new $controllerName;

                    // обращемся к созданному контроллеру с нужным методом и передаем туда необходимые параметры 
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                    // проверяем результативность 
                    if($result != null){
                        die;
                    }
                }
            }

        }


    }