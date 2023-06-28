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

    public function quickStore($request)
    {
        $data = (object)$request->data;
        $article = $this->article->create([
            'title' => $data->name,
            'description' => $data->description,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'status' => 0
        ]);

        return $article;
    }
    public function updateTour($request,$id)
    {
        $data = (object)$request->data;
        $article = $this->article->where('id',$id)->update([
            'title' => $data->name,
            'description' => $data->description,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'status' => $request->status
        ]);

        return $article;
    }

    public function findTour($id)
    {
        return $this->article->find($id);
    }


}
