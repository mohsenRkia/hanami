<?php

namespace Modules\Slider\Services;



use Modules\Slider\Entities\Slider;

class SliderServices
{
    public function __construct(
        private Slider $slider
    ){}

    public function all()
    {
        return $this->slider->all();
    }
    public function allCount()
    {
        return $this->slider->count();
    }
    public function store($request)
    {
        return $this->slider->create([
            'title' => $request->title,
        ]);
    }
    public function find($id)
    {
        return $this->slider->find($id);
    }
    public function update($request, $id)
    {
        return $this->slider->where('id',$id)->update([
            'title' => $request->title,
        ]);
    }
    public function destroy($id)
    {
        return $this->slider->destroy($id);
    }
}
