<?php

namespace Engine\Components;

class Router
{

    private array $routes;
    private string $uri;

    public function __CONSTRUCT()
    {
        $routesPath = __DIR__ . "/../Etc/Routes.php";
        $this->routes = include $routesPath;
    }

    /**
     * @return string|void
     */
    private function getUri()
    {
        try{
            if(!empty($_SERVER['REQUEST_URI']))
            {
                $this->uri = $_SERVER['REQUEST_URI'];
                $this->uri = trim($this->uri, "/");
                return $this->uri;
            }
            throw new \Exception('Что-то пошло не так');
        }catch(\Exception $e)
        {
            $e->getMessage();
        }
    }

    public function getRoutes()
    {
        /**
         * get uri request string
         */
        $uri = $this->getUri();
        /**
         * check values uri in Routes.php
         */
        foreach ($this->routes as $uriRequest => $path)
        {
            try{
                if(preg_match("~$uriRequest~", $uri))
                {
                    /**
                     * split the string into two parts
                     */
                    $segments = explode("/", $path);

                    /**
                     *  get first part and merge to string: "fistPartController"
                     */
                    $controllerName = array_shift($segments). "Controller";

                    /**
                     * Add controller name
                     * switch first alpha to upper case
                     */
                    $controllerName = ucfirst($controllerName);

                    /**
                     * Add action name
                     * switch first alpha to upper case
                     */
                    $actionName = "action" . ucfirst(array_shift($segments));

                    /**
                     * if true -> connect class of controller and action handles the request
                     */
                    $classPath = "Engine\\Controllers\\" . $controllerName;

                    /**
                     * create object of class Controller
                     */
                    $classPath = new $classPath;
                    $result = $classPath->actionIndex();

                    /**
                     * break cycle where method start
                     */
                    if($result != null) break;
                }
                throw new \Exception('страница не найдена');
            } catch (\Exception $e)
            {
                $e->getMessage();
            }
        }
    }
}