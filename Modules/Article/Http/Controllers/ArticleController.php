<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Article\Services\ArticleServices;
use Modules\Article\Services\ArticleTypeServices;
use Modules\Category\Services\CategoryServices;

class ArticleController extends Controller
{
    public function __construct(
        private ArticleServices $articleServices,
        private CategoryServices $categoryServices,
        private ArticleTypeServices $articleTypeServices,
    ){}

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $articles = $this->articleServices->all();
        return view('article::index',compact('articles'));
    }
    public function quickStore(Request $request)
    {
        $article = $this->articleServices->quickStore($request);
        return response()->json($article);
    }
    public function updateArticle(Request $request,$id)
    {
        $article = $this->articleServices->update($request,$id);
        return response()->json($article);
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = $this->categoryServices->all();
        $articleTypes = $this->articleTypeServices->allWithoutTour();

        return view('article::create',compact('categories','articleTypes'));
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
        return view('article::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $article = $this->articleServices->find($id);
        $categories = $this->categoryServices->all();
        $articleTypes = $this->articleTypeServices->allWithoutTour();
        $image = $article->getMedia('Image')->first() ? $article->getMedia('Image')->first()->findVariant('thumb')->getUrl() : null;

        return view('article::edit',compact('image','article','categories','articleTypes'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $delete = $this->articleServices->destroy($id);
        return response()->json($delete);
    }
}
