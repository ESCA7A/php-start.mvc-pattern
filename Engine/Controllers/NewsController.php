<?php

namespace Engine\Controllers;

use Engine\Models\News;

class NewsController extends Controller
{
    protected News $newsModel;

    public function __CONSTRUCT()
    {
        $this->newsModel = new News();
    }
    public function actionIndex(): bool
    {
        return true;
    }

    public function actionView($category, $id): bool
    {
        $this->newsModel->sayHi();
        return true;
    }
}