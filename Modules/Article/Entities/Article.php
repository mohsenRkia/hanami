<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Tour\Entities\TourMainDetail;
use Plank\Mediable\Mediable;

class Article extends Model
{
    use HasFactory,Mediable;

    protected $fillable = [
        'title',
        'description',
        'category_id',
        'type',
        'status'
    ];

    public function tour_main_detail()
    {
        return $this->hasOne(TourMainDetail::class);
    }

    protected static function newFactory()
    {
        return \Modules\Article\Database\factories\ArticleFactory::new();
    }
}
