<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Slider extends Model
{
    use HasFactory,Mediable;
    protected $fillable  = ['title'];
}
