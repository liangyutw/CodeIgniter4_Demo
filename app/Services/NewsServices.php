<?php
namespace App\Services;


use App\Repositories\NewsRepositories;

class NewsServices
{
    protected $newsRepositories;
    public function __construct()
    {
        $this->newsRepositories = model(NewsRepositories::class);
    }


    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->newsRepositories->getAllNews();
        }

        return $this->newsRepositories->getNewsByCondition($slug);
    }

    public function createNews($data)
    {
        if (!is_array($data) or count($data) <= 0) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Have No Data');
        }

        return $this->newsRepositories->createNews($data);
    }
}