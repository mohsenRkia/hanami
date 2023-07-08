<?php

namespace Modules\Article\Services;

use Modules\Article\Entities\Article;

class ArticleServices
{
    public function __construct(
        private Article $article
    ){}

    public function find($id)
    {
        return $this->article->find($id);
    }
}
