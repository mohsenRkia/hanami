<?php

namespace Modules\Article\Services;

use Modules\Article\Entities\Article;

class ArticleServices
{
    public function __construct(
        private Article $article
    ){}

    public function all()
    {
        return $this->article->where('type','!=','tour')->get();
    }
    public function find($id)
    {
        return $this->article->find($id);
    }

    public function quickStore($request)
    {
        $data = (object)$request->data;
        $article = $this->article->create([
            'title' => $data->title,
            'description' => $data->description,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'status' => 0
        ]);

        return $article;
    }
    public function update($request, $id)
    {
        $data = (object)$request->data;

        $article = $this->article->find($id);
        $article->title = $data->title;
        $article->description = $data->description;
        $article->category_id = $request->category_id;
        $article->type = $request->type;
        $article->status = $request->status;
        $article->save();

        return $article;
    }
    public function destroy($id)
    {
        return $this->article->destroy($id);
    }
}
