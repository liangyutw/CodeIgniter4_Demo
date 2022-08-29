<?php
namespace App\Repositories;


use App\Models\NewsModel;

class NewsRepositories
{
    protected $newsModel;
    public function __construct()
    {
        $this->newsModel = model(NewsModel::class);
    }

    public function getAllNews()
    {
        return $this->newsModel->findAll();
    }

    public function getNewsByCondition($slug)
    {
        return $this->newsModel->where(['slug' => $slug])->first();
    }

    public function createNews($data)
    {
        return $this->newsModel->save($data);
    }
}
