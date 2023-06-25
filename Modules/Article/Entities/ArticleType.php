<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleType extends Model
{
    use HasFactory;
    protected $table = 'article_types';
    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Article\Database\factories\ArticleTypeFactory::new();
    }
}
