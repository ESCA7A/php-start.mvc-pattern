<?php

namespace Engine\Controllers;

abstract class Controller
{
    private string $path;
    abstract public function actionIndex(): bool;
    abstract public function actionView($category, $id);
}