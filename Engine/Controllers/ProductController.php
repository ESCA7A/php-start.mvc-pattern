<?php

namespace Engine\Controllers;

class ProductController extends Controller
{
    private string $path = __FILE__;

    public function sayHi(): void
    {
        echo "я класс: " . $this->path;
    }

    public function actionIndex(): bool
    {
        echo "actionIndex: ". $this->path;
        return true;
    }

    public function actionView(): bool
    {
        echo "actionView: ". $this->path;
        return true;
    }
}