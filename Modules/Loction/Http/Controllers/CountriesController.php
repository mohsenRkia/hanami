<?php

namespace Modules\Loction\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Loction\Http\Requests\StoreCountryRequest;
use Modules\Loction\Services\AreasServices;
use Modules\Loction\Services\CountriesServices;

class CountriesController extends Controller
{
    public function __construct(
        private CountriesServices $countriesServices,
        private AreasServices $areasServices
    ){}

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $countries = $this->countriesServices->allWithPaginate(5);
        $countriesCount = $this->countriesServices->allCount();
        return view('loction::countries.index',compact('countries','countriesCount'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $areas = $this->areasServices->all();
        return view('loction::countries.create',compact('areas'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreCountryRequest $request)
    {
        $this->countriesServices->store($request);
        return redirect()->route('countries.index');
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
        $country = $this->countriesServices->find($id);
        $areas = $this->areasServices->all();
        return view('loction::countries.edit',['country' => $country , 'areas' => $areas]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreCountryRequest $request, $id)
    {
        $this->countriesServices->update($request,$id);
        return redirect()->route('countries.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $delete = $this->countriesServices->destroy($id);
        return response()->json($delete);
    }
}
