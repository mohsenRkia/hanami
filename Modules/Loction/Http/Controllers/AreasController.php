<?php

namespace Modules\Loction\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Loction\Http\Requests\StoreAreaRequest;
use Modules\Loction\Services\AreasServices;

class AreasController extends Controller
{
    public function __construct(
        private AreasServices $areasServices
    ){}
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $areas = $this->areasServices->allWithPaginate(5);
        $areasCount = $this->areasServices->allCount();
        return view('loction::areas.index',compact('areas','areasCount'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('loction::areas.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreAreaRequest $request)
    {
        $this->areasServices->store($request);
        return redirect()->route('areas.index');
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
        $area = $this->areasServices->find($id);
        return view('loction::areas.edit',['area' => $area]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreAreaRequest $request, $id)
    {
        $this->areasServices->update($request,$id);
        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
       $delete = $this->areasServices->destroy($id);
        return response()->json($delete);
    }
}
