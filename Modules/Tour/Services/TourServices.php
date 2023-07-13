<?php

namespace Modules\Tour\Services;

use Carbon\Carbon;
use Modules\Article\Entities\Article;
use Modules\Tour\Entities\TourMainDetail;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class TourServices
{
    public function __construct(
        private Article $article
    )
    {
    }

    public function getallWhereIsTour()
    {
        return $this->article->where('type', 'tour')->get();
    }

    public function quickStore($request)
    {
        $data = (object)$request->data;
        $article = $this->article->create([
            'title' => $data->title,
            'description' => $data->description,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'status' => 0
        ]);

        return $article;
    }

    public function updateTour($request, $id)
    {
//        return $request->tour_info['start_year'];
        $data = (object)$request->data;

        $article = $this->article->find($id);
        $article->title = $data->title;
        $article->description = $data->description;
        $article->category_id = $request->category_id;
        $article->type = $request->type;
        $article->status = $request->status;

        $startDate = ShamsiToMiladi($request->tour_info['start_year'], $request->tour_info['start_month'], $request->tour_info['start_day']);
        $endDate = ShamsiToMiladi($request->tour_info['end_year'], $request->tour_info['end_month'], $request->tour_info['end_day']);

        if (!$article->tour_main_detail()->exists()){
            $main_detail = new TourMainDetail();
            $main_detail->article_id = $id;
        }else{
            $main_detail = TourMainDetail::where('article_id',$id)->first();
        }
        $main_detail->start_day = $startDate;
        $main_detail->end_day = $endDate;
        $main_detail->type_moving_id = $request->tour_info['selectedTypeMoving'];
        $main_detail->tour_period = $request->tour_info['tour_period'];
        $main_detail->save();
        $article->save();

        return $article;
    }

    public function findTour($id)
    {
        return $this->article->find($id);
    }

    public function findTourWithRelations($id)
    {
        return
            $this->article
                ->where('id', $id)
                ->with('tour_main_detail')
                ->first();
    }


}
