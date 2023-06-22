<?php

namespace Modules\Loction\Services;

use Modules\Loction\Entities\Country;

class CountriesServices{
    public function __construct(
        private Country $country
    ){}
    public function all()
    {
        return $this->country->all();
    }
    public function allWithPaginate($num)
    {
        return $this->country->with('area')->paginate($num);
    }
    public function allCount()
    {
        return $this->country->count();
    }
    public function store($request)
    {
        return $this->country->create([
            'area_id' => $request->area_id,
            'name_fa' => $request->name_fa,
            'name_en' => $request->name_en,
            'description' => $request->description,
        ]);
    }
    public function find($id)
    {
        return $this->country->with('area')->find($id);
    }
    public function update($request, $id)
    {
        return $this->country->where('id',$id)->update([
            'area_id' => $request->area_id,
            'name_fa' => $request->name_fa,
            'name_en' => $request->name_en,
            'description' => $request->description,
        ]);
    }
    public function destroy($id)
    {
        return $this->country->destroy($id);
    }
}
