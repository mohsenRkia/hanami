<?php

namespace Modules\Tour\Services;


use Modules\Tour\Entities\TourDestination;
use Modules\Tour\Entities\TourOtherDetail;
use Modules\Tour\Entities\TourPlan;

class TourPlansServices
{
    public function __construct(
        private TourPlan $tourPlan
    )
    {
    }

    public function all($id)
    {
        return $this->tourPlan->where('article_id',$id)->get();
    }


    public function update($request,$articleId)
    {
        $this->deletePreviousKey($articleId);

        return $this->addNewFaKey($request->keys,$articleId);
    }




    function deletePreviousKey($id){
        $this->tourPlan->where('article_id',$id)->delete();
    }

    function addNewFaKey($keys,$id){
        $n = 0;
        foreach ($keys as $record){
            $key = new TourPlan();
            $key->article_id = $id;
            $key->title = $record['key'];
            $key->description = $record['description'];
            $key->order = $record['order'];
            $key->type_moving_id = $record['type_moving_id'];
            $key->save();
            $n++;
        }

        return true;
    }
}
