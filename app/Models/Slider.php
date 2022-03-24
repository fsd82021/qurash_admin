<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Slider extends Model
{
   
    use Translatable;

    public $translatedAttributes = [
        'img_alt',
        'title',
        'description',
    ];

    protected $fillable = [
        'image',
    ];
}
