<?php

namespace Modules\Tour\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Article\Services\ArticleTypeServices;
use Modules\Category\Services\CategoryServices;
use Modules\Loction\Services\CitiesServices;
use Modules\Tour\Http\Requests\OtherDetailStoreRequest;
use Modules\Tour\Http\Requests\TourDestinationsStoreRequest;
use Modules\Tour\Http\Requests\TourPlansStoreRequest;
use Modules\Tour\Services\OtherDetailTourServices;
use Modules\Tour\Services\TourDestinationsServices;
use Modules\Tour\Services\TourPlansServices;
use Modules\Tour\Services\TourServices;
use Modules\Tour\Services\TypeMovingServices;

class TourController extends Controller
{
    public function __construct(
        private TourServices $tourServices,
        private CategoryServices $categoryServices,
        private ArticleTypeServices $articleTypeServices,
        private TypeMovingServices $typeMovingServices,
        private OtherDetailTourServices $otherDetailTourServices,
        private CitiesServices $citiesServices,
        private TourDestinationsServices $tourDestinationsServices,
        private TourPlansServices $tourPlansServices,
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
        $articleTypes = $this->articleTypeServices->getTour();
        $typeMovings = $this->typeMovingServices->all();
        $cities = $this->citiesServices->all();

        return view('tour::tours.create',compact('cities','categories','articleTypes','typeMovings'));
    }
    public function quickStoreTour(Request $request)
    {
        $article = $this->tourServices->quickStore($request);
        return response()->json($article);
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
        $categories = $this->categoryServices->all();
        $articleTypes = $this->articleTypeServices->getTour();
        $typeMovings = $this->typeMovingServices->all();
        $tour = $this->tourServices->findTourWithRelations($id);
        $image = $tour->getMedia('Tour')->first() ? $tour->getMedia('Tour')->first()->findVariant('thumb')->getUrl() : null;
        $oldOtherDetail = $this->otherDetailTourServices->all();
        $oldDestinations = $this->tourDestinationsServices->all($id);
        $cities = $this->citiesServices->all();
        $oldPlansKeys = $this->tourPlansServices->all($id);
        return view('tour::tours.edit', compact('oldPlansKeys','oldDestinations','cities','oldOtherDetail','image','tour','categories','articleTypes','typeMovings'));
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

    public function otherDetails(OtherDetailStoreRequest $request,$articleId)
    {
        return $this->otherDetailTourServices->update($request,$articleId);
    }
    public function tourDestinations(TourDestinationsStoreRequest $request,$articleId)
    {
        return $this->tourDestinationsServices->update($request,$articleId);
    }
    public function tourPlans(TourPlansStoreRequest $request,$articleId)
    {
        return $this->tourPlansServices->update($request,$articleId);
    }
}
