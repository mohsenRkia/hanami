<?php
namespace Modules\Slider\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Slider\Services\SliderServices;
use Modules\Slider\Http\Requests\StoreSliderRequest;

class SliderController extends Controller
{
    public function __construct(
        private SliderServices $sliderServices
    ){}
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $sliders = $this->sliderServices->all();
        $slidersCount = $this->sliderServices->allCount();
        return view('slider::index',compact('sliders','slidersCount' ));

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('slider::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreSliderRequest $request)
    {
        $slider = $this->sliderServices->store($request);
        return redirect()->route('sliders.edit',['slider' => $slider->id]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(string $id)
    {
        {
            $slider = $this->sliderServices->find($id);
            $image = $slider->getMedia('Slider')->first() ? $slider->getMedia('Slider')->first()->findVariant('thumb')->getUrl() : null;
            return view('slider::edit',compact('slider','image' ));
        }
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreSliderRequest $request, $id)
    {
        $this->sliderServices->update($request,$id);
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $delete = $this->sliderServices->destroy($id);
        return response()->json($delete);
    }
}
