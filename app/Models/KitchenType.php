<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class KitchenType extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
    ];

    protected $fillable = ['id'];

    public function recipe() {
        return $this->hasMany(Recipe::class);
    }
}
