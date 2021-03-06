<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Setting extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'website_title',
        'copyrights',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'address',
        'footer_description',
    ];

    protected $fillable = [
        'logo',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'email',
        'phone',
        'footer_logo',
    ];
}
