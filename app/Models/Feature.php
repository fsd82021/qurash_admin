<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Feature extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    protected $fillable = ['icon'];
    public $translatedAttributes = ['name','description'];
}
