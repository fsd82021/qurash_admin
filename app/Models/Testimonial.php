<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Testimonial extends Model implements TranslatableContract
{
    use Translatable;
    protected $fillable = ['image'];
    public $translatedAttributes = ['name','description','img_alt'];
}
