<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Morilog\Jalali\CalendarUtils;

class TourDestination extends Model
{
    use HasFactory;
    protected $table = 'tour_destinations';
    protected $appends = [
      'key'
    ];

    protected $fillable = ['article_id','city_id','destination_period'];
    public function getKeyAttribute()
    {
        return $this->attributes['destination_period'];
    }

}
