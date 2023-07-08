<?php

namespace Modules\Information\Services;

use Modules\Information\Entities\Information;

class InformationServices
{
    public function __construct(
        private Information $information
    )
    {}

    public function all()
    {
        return $this->information->all();
    }
    public function allWithPaginate($num)
    {
        return $this->information->paginate($num);
    }
    public function allCount()
    {
        return $this->information->count();
    }
    public function store($request)
    {
        return $this->information->create([
            'key' => $request->value,
            'slug' => $request->slug,
            'value' => $request->value,
        ]);
    }
    public function find($id)
    {
        return $this->information->find($id);
    }
    public function update($request, $id)
    {
        return $this->information->where('id',$id)->update([
            'key' => $request->key,
            'slug' => $request->slug,
            'value' => $request->value,
        ]);
    }
    public function destroy($id)
    {
        return $this->information->destroy($id);
    }
}
