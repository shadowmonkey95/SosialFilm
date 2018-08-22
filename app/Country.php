<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['name', 'code', 'flag_img'];
    public static function scopegetCountry()
    {
        return Country::pluck('name', 'id');
    }
}
