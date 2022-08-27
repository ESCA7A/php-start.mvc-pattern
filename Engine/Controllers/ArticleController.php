<?php

namespace Engine\Controllers;

class ArticleController extends Controller
{
    private string $path = __FILE__;

    public function sayHi(): void
    {
        echo "я класс: " . $this->path;
    }

    public function actionIndex(): bool
    {
        $this->sayHi();
        return true;
    }
}