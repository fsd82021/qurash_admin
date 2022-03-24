<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Partner extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'img_alt',
    ];
    protected $fillable = [
        'image',
    ];
}
