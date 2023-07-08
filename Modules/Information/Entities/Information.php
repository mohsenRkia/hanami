<?php

namespace Modules\Information\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Information extends Model
{
    use HasFactory;

    protected $fillable = ['key','value','slug'];

    protected static function newFactory()
    {
        return \Modules\Information\Database\factories\InformationFactory::new();
    }
}
