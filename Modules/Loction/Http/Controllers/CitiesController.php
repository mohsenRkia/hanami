<?php

namespace Modules\Loction\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Loction\Http\Requests\StoreCityRequest;
use Modules\Loction\Services\AreasServices;
use Modules\Loction\Services\CitiesServices;
use Modules\Loction\Services\CountriesServices;

class CitiesController extends Controller
{
    public function __construct(
        private CitiesServices    $citiesServices,
        private CountriesServices $countriesServices,
        private AreasServices     $areasServices
    ){}
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $cities = $this->citiesServices->allWithPaginate(5);
        $citiesCount = $this->citiesServices->allCount();
        return view('loction::cities.index',compact('cities','citiesCount'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $areas = $this->areasServices->all();
        $countries = $this->countriesServices->all();
        return view('loction::cities.create',compact('areas','countries'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreCityRequest $request)
    {
        $this->citiesServices->store($request);
        return redirect()->route('cities.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('loction::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $city = $this->citiesServices->find($id);
        $countries = $this->countriesServices->all();
        $areas = $this->areasServices->all();
        return view('loction::cities.edit',['city' => $city,'countries' => $countries , 'areas' => $areas]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreCityRequest $request, $id)
    {
        $this->citiesServices->update($request,$id);
        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $delete = $this->citiesServices->destroy($id);
        return response()->json($delete);
    }
}
