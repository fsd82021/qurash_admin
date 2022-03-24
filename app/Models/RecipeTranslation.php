<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeTranslation extends Model
{
    protected $fillable = [
        'title',
        'description',
        'ingredients',
        'instructions',
        'image_alt',
    ];
}
