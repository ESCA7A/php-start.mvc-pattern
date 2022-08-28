<?php

namespace Engine\Controllers;

class ProductController implements ProductActionInterface
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

    public function actionList($category, $id): bool
    {
        echo "actionList: ". $this->path;
        return true;
    }
}