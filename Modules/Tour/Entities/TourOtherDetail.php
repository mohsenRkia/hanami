<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Morilog\Jalali\CalendarUtils;

class TourOtherDetail extends Model
{
    use HasFactory;
    protected $table = 'tour_other_details';
    protected $appends = [
      'key'
    ];

    protected $fillable = ['article_id','title'];
    public function getKeyAttribute()
    {
        return $this->attributes['title'];
    }

}
