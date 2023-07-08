<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Morilog\Jalali\Jalalian;

class TourMainDetail extends Model
{
    use HasFactory;
    protected $table = 'tour_main_details';

    protected $fillable = [];

    public function getStartDayAttribute($value)
    {
        $JalaliDate = Jalalian::fromFormat('Y-m-d',$value);
        return $JalaliDate->toArray();
    }
    public function getEndDayAttribute($value)
    {
        $JalaliDate = Jalalian::fromFormat('Y-m-d',$value);
        return $JalaliDate->toArray();
    }
    protected static function newFactory()
    {
        return \Modules\Tour\Database\factories\TourMainDetailFactory::new();
    }
}
