<?php

namespace Modules\Article\Services;

use Modules\Article\Entities\ArticleType;

class ArticleTypeServices
{
    public function __construct(
        private ArticleType $articleType
    ){}

    public function all()
    {
        return $this->articleType->all('name','id','slug');
    }
}
