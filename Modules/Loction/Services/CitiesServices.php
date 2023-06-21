<?php

namespace Modules\Loction\Services;

use Modules\Loction\Entities\City;
use Modules\Loction\Entities\country;

class CitiesServices{
    public function __construct(
        private City $city
    ){}
    public function all()
    {
        return $this->city->all();
    }
    public function allWithPaginate($num)
    {
        return $this->city->with('area' , 'country')->paginate($num);
    }
    public function allCount()
    {
        return $this->city->count();
    }
    public function store($request)
    {
        return $this->city->create([
            'area_id' => $request->area_id,
            'country_id' => $request->country_id,
            'name_fa' => $request->name_fa,
            'name_en' => $request->name_en,
            'description' => $request->description,
        ]);
    }
    public function find($id)
    {
        return $this->city->with('area' , 'country')->find($id);
    }
    public function update($request, $id)
    {
        return $this->city->where('id',$id)->update([
            'area_id' => $request->area_id,
            'country_id' => $request->country_id,
            'name_fa' => $request->name_fa,
            'name_en' => $request->name_en,
            'description' => $request->description,
        ]);
    }
    public function destroy($id)
    {
        return $this->city->destroy($id);
    }
}
