<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Recipe extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = [
        'title',
        'description',
        'ingredients',
        'instructions',
        'image_alt',
    ];

    protected $fillable = [
        'image',
        'date',
        'is_slider',
        'category_id',
        'kitchen_type_id',
        'is_favorite',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function kitchen() {
        return $this->belongsTo(KitchenType::class, 'kitchen_type_id');
    }
    public function view(){
        return $this->hasMany(View::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
