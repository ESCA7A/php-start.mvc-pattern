<?php

namespace Engine\Components;

abstract class componentRouter implements ApiRouterInterface
{
    protected array $routes;
    protected string $uri;

    /**
     * get url & cleaning spaces and other characters
     * @return string|void
     */
    public function getUri()
    {
        if(!empty($_SERVER['REQUEST_URI']))
        {
            $this->uri = $_SERVER['REQUEST_URI'];
            $this->uri = trim($this->uri, "/");
            return $this->uri;
        }
    }
}