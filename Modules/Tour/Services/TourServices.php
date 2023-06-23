<?php

namespace Modules\Tour\Services;

use Modules\Article\Entities\Article;

class TourServices
{
    public function __construct(
        private Article $article
    ){}

    public function getallWhereIsTour()
    {
        return $this->article->where('type','tour')->get();
    }

    public function allWithPaginate($num)
    {
        return $this->role->paginate($num);
    }

    public function quickStore($request)
    {
        $data = (object)$request->data;

        $article = Article::create([
            'title' => $data->title,
            'description' => $data->description,
            'category_id' => $data->category_id,
            'type' => 'notype',
            'status' => 0
        ]);

        return $article;
    }
    public function store($request)
    {

    }


}
