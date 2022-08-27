<?php

namespace Engine\Controllers;

use Engine\Models\News as ModelNews;

class NewsController extends Controller
{
    protected ModelNews $newsModel;

    public function __CONSTRUCT()
    {
        $this->newsModel = new ModelNews();
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