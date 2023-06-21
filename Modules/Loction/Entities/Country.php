<?php

namespace Modules\Loction\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['area_id','name_fa','name_en','description'];

    public function area()
    {
        return $this->belongsTo(Area::class,'area_id' , 'id');
    }
    protected static function newFactory()
    {
        return \Modules\Loction\Database\factories\CountryFactory::new();
    }
}
