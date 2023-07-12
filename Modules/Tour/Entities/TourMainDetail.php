<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Morilog\Jalali\CalendarUtils;
use Morilog\Jalali\Jalalian;

class TourMainDetail extends Model
{
    use HasFactory;
    protected $table = 'tour_main_details';

    protected $fillable = [];

    public function getStartDayAttribute($value)
    {
        $exploded = explode('-',$value);
        $JalaliDate = CalendarUtils::toJalali($exploded[0],$exploded[1],$exploded[2]);
        return $JalaliDate;
    }
    public function getEndDayAttribute($value)
    {
        $exploded = explode('-',$value);
        $JalaliDate = CalendarUtils::toJalali($exploded[0],$exploded[1],$exploded[2]);
        return $JalaliDate;
    }
    protected static function newFactory()
    {
        return \Modules\Tour\Database\factories\TourMainDetailFactory::new();
    }
}
