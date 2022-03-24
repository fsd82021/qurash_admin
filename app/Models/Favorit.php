<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    protected $fillable = [
        'recipe_id',
        'user_id',
    ];

    public function recipe() {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
