<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Http\Requests\StoreCategoryRequest;
use Modules\Category\Services\CategoryServices;

class CategoryController extends Controller
{
    public function __construct(
        private CategoryServices $categoryServices
    ){}

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $categories = $this->categoryServices->allWithPaginate(5);
        $categoriesCount = $this->categoryServices->allCount();
        return view('category::index',compact('categories','categoriesCount' ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = $this->categoryServices->all();
        return view('category::create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = $this->categoryServices->store($request);
        return redirect()->route('categories.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('category::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $category = $this->categoryServices->find($id);
        return view('category::edit',compact('category' ));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $this->categoryServices->update($request,$id);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $delete = $this->categoryServices->destroy($id);
        return response()->json($delete);
    }
}
