<?php

namespace Modules\Loction\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['name_fa','name_en','description'];

    protected static function newFactory()
    {
        return \Modules\Loction\Database\factories\AreaFactory::new();
    }
}
