<?php

namespace Modules\Category\Services;

use Modules\Category\Entities\Category;

class CategoryServices
{
    public function __construct(
        private Category $category
    ){}

    public function all()
    {
        return $this->category->all();
    }
}
