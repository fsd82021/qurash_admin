<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Page extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'description',
        'img_alt'
    ];

    protected $fillable = ['identifier','image','video'];
}
