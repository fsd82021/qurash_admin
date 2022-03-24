<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Service extends Model
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'description',
        'summary',
        'img_alt'
    ];
    protected $fillable = [
        'image',
    ];

    public function option()
    {
        return $this->hasMany(Option::class,'service_id');
    }
    public function serveImages()
    {
        return $this->hasMany(ServImages::class,'service_id');
    }
}
