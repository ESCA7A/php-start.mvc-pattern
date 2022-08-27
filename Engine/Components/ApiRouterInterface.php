<?php

namespace Engine\Components;

interface ApiRouterInterface
{
    /**
     * get url for router
     * @return mixed
     */
    public function getUri();

    /**
     * find controller
     * @return void
     */
    public function getRoutes(): void;
}