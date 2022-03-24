<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Team extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'name',
        'description',
        'img_alt'
    ];

    protected $fillable = [
        'image', 
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
    ];
}
