<?php

namespace Modules\Tour\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeMoving extends Model
{
    use HasFactory;
    protected $table = 'type_movings';
    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Tour\Database\factories\TypeMovingFactory::new();
    }
}
