<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TourMainDetail extends Model
{
    use HasFactory;
    protected $table = 'tour_main_details';

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Tour\Database\factories\TourMainDetailFactory::new();
    }
}
