<?php

namespace Modules\Tour\Services;

use Modules\Article\Entities\Article;
use Modules\Tour\Entities\TourMainDetail;
use Morilog\Jalali\CalendarUtils;

class TourServices
{
    public function __construct(
        private Article $article
    ){}

    public function getallWhereIsTour()
    {
        return $this->article->where('type','tour')->get();
    }

    public function quickStore($request)
    {
        $data = (object)$request->data;
        $article = $this->article->create([
            'title' => $data->name,
            'description' => $data->description,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'status' => 0
        ]);

        return $article;
    }
    public function updateTour($request,$id)
    {
        $data = (object)$request->data;
        return $data;
        $article = $this->article->where('id',$id)->update([
            'title' => $data->name,
            'description' => $data->description,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'status' => $request->status
        ]);

//        if ($article->tour_main_detail())
        $startDate = CalendarUtils::toGregorian($request->tour_info['start_year'],$request->tour_info['start_month'],$request->tour_info['start_day']);
        return $startDate;
        $main_detail = new TourMainDetail();
        $main_detail->article_id = $id;
        $main_detail->start_day = $startDate;
        $main_detail->end_day = $request->tour_info['end_date'];
        $main_detail->type_moving_id = $request->tour_info['selectedTypeMoving'];
        $main_detail->tour_period = $request->tour_info['tour_period'];
        $main_detail->save();


        return $article->tour_main_detail();
    }

    public function findTour($id)
    {
        return $this->article->find($id);
    }
    public function findTourWithRelations($id)
    {
        return
            $this->article
            ->where('id',$id)
            ->with('tour_main_detail')
            ->first();
    }


}
