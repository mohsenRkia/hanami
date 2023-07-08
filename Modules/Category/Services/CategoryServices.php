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
    public function allWithPaginate($num)
    {
        return $this->category->paginate($num);
    }
    public function allCount()
    {
        return $this->category->count();
    }
    public function store($request)
    {
        return $this->category->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
    }
    public function find($id)
    {
        return $this->category->find($id);
    }
    public function update($request, $id)
    {
        return $this->category->where('id',$id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);
    }
    public function destroy($id)
    {
        return $this->category->destroy($id);
    }
}
