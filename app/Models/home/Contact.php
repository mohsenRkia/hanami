<?php

namespace App\Models\home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact_us';
    protected $fillable = ['firstname','lastname','mobile','description'];
    protected $appends = [
        'full_name'
    ];
    public function getFullNameAttribute()
    {
        return trim( $this->firstname . ' ' . $this->lastname );
    }
}
