<?php

namespace Engine\Controllers;

use Engine\Models\News as ModelNews;

class NewsController implements NewsControllerInterface
{
    protected ModelNews $newsModel;
    private string $path = __FILE__;

    public function __CONSTRUCT()
    {
        #$this->newsModel = new ModelNews();
    }
    public function actionIndex(): bool
    {
        echo "actionIndex: ". $this->path;
        return true;
    }

    public function actionView($category, $id): bool
    {
        echo "actionView: ". $this->path;
        return true;
    }
}