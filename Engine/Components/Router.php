<?php

namespace Engine\Components;

class Router extends componentRouter
{

    protected array $routes;
    protected string $uri;

    public function __CONSTRUCT()
    {
        $routesPath = __DIR__ . "/../Etc/Routes.php";
        $this->routes = include $routesPath;
    }

    public function getRoutes(): void
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
                if(preg_match("~^$uriRequest$~", $uri))
                {

                    /**
                     * get internal route ~Controller/Action/param1/param2~
                     */
                    $internalRoute = preg_replace("~$uriRequest~", $path, $uri);

                    /**
                     * split the string uri path into two parts
                     */
                    $uriString = explode("/", $internalRoute);

                    /**
                     *  get first part uri and merge to string: "[f]istPartController"
                     */
                    $controllerNameLowerCase = array_shift($uriString). "Controller";

                    /**
                     * Add controller name
                     * switch first alpha to upper case
                     */
                    $controllerName = ucfirst($controllerNameLowerCase);

                    /**
                     * Add action name
                     * switch first alpha to upper case
                     */
                    $actionName = "action" . ucfirst(array_shift($uriString));

                    /**
                     * if true -> connect class of controller and action handles the request
                     */
                    $classPath = "Engine\\Controllers\\" . $controllerName;

                    /**
                     * create object of class Controller
                     * Call actionName - method
                     */
                    $classAction = new $classPath;
                    $result = call_user_func_array(array($classAction, $actionName), $uriString);

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