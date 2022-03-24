<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'comment',
        'comment_status',
        'recipe_id',
        'user_id',
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function recipe() {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
}
