<?php

namespace Modules\Tour\Services;


use Modules\Tour\Entities\TourDestination;
use Modules\Tour\Entities\TourOtherDetail;

class TourDestinationsServices
{
    public function __construct(
        private TourDestination $tourDestination
    )
    {
    }

    public function all($id)
    {
        return $this->tourDestination->where('article_id',$id)->get();
    }
    public function update($request,$articleId)
    {
        $this->deletePreviousKey($articleId);
        return $this->addNewFaKey($request->keys,$articleId);
    }
    function deletePreviousKey($id){
        $this->tourDestination->where('article_id',$id)->delete();
    }
    function addNewFaKey($keys,$id){
//        return $keys;
        $n = 0;
        foreach ($keys as $record){
            $key = new TourDestination();
            $key->article_id = $id;
            $key->city_id = $record['city_id'];
            $key->destination_period = $record['key'];
            $key->save();

            $n++;
        }

        return true;
    }
}
