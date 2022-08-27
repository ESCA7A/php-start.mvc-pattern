<?php

namespace Engine\Controllers;

class NewsController extends Controller
{
    private string $path = __FILE__;

    public function sayHi(): void
    {
        echo "я класс: " . $this->path;
    }

    public function actionIndex()
    {
        $this->sayHi();
        return true;
    }
}