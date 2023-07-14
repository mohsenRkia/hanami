<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Morilog\Jalali\CalendarUtils;

class TourPlan extends Model
{
    use HasFactory;
    protected $table = 'tour_plans';
    protected $appends = [
      'key'
    ];

    protected $fillable = ['article_id','type_moving_id','title','description'];

    public function getKeyAttribute()
    {
        return $this->attributes['title'];
    }

}
