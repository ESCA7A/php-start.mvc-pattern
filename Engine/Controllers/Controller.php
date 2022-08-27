<?php

namespace Engine\Controllers;

abstract class Controller implements Test
{
    private string $path;
    abstract public function sayHi(): void;
    abstract public function actionIndex();
}