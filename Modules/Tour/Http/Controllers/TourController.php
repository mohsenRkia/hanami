<?php

namespace Modules\Tour\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Article\Entities\Article;
use Modules\Article\Services\ArticleTypeServices;
use Modules\Category\Services\CategoryServices;
use Modules\Tour\Services\TourServices;

class TourController extends Controller
{
    public function __construct(
        private TourServices $tourServices,
        private CategoryServices $categoryServices,
        private ArticleTypeServices $articleTypeServices
    ){}

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $tours = $this->tourServices->getallWhereIsTour();
        return view('tour::tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = $this->categoryServices->all();
        $articleTypes = $this->articleTypeServices->all();

        return view('tour::tours.create',compact('categories','articleTypes'));
    }
    public function quickStoreTour(Request $request)
    {
        $article = $this->tourServices->quickStore($request);
        return response()->json($article);
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('tour::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $tour = $this->tourServices->findTour($id);
        return view('tour::edit', compact('tour'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $tour)
    {
        $updatedTour = $this->tourServices->updateTour($request,$tour);
        return response()->json($updatedTour);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
