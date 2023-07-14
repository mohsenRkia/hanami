<?php

namespace Modules\Tour\Services;


use Modules\Tour\Entities\TourOtherDetail;

class OtherDetailTourServices
{
    public function __construct(
        private TourOtherDetail $tourOtherDetail
    )
    {
    }

    public function all()
    {
        return $this->tourOtherDetail->all();
    }
    public function update($request,$articleId)
    {
        $this->deletePreviousKey($articleId);
        return $this->addNewFaKey($request->title,$articleId);
    }
    function deletePreviousKey($id){
        $this->tourOtherDetail->where('article_id',$id)->delete();
    }
    function addNewFaKey($keys,$id){
        $n = 0;
        foreach ($keys as $record){
            $key = new TourOtherDetail();
            $key->article_id = $id;
            $key->title = $record['key'];
            $key->save();

            $n++;
        }

        return true;
    }
}
