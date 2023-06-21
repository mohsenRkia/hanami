<?php

namespace Modules\Loction\Services;

use Modules\Loction\Entities\Area;

class AreasServices{
    public function __construct(
        private Area $area
    ){}

    public function all()
    {
        return $this->area->all();
    }
    public function allWithPaginate($num)
    {
        return $this->area->paginate($num);
    }
    public function allCount()
    {
        return $this->area->count();
    }
    public function store($request)
    {
        return $this->area->create([
            'name_fa' => $request->name_fa,
            'name_en' => $request->name_en,
            'description' => $request->description,
        ]);
    }
    public function find($id)
    {
        return $this->area->find($id);
    }
    public function update($request, $id)
    {
        return $this->area->where('id',$id)->update([
            'name_fa' => $request->name_fa,
            'name_en' => $request->name_en,
            'description' => $request->description,
        ]);
    }
    public function destroy($id)
    {
        return $this->area->destroy($id);
    }
}
