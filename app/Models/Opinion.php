<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $table = 'opiniones';

    public $guarded = [];

    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getUser() {
        return $this->hasManyThrough(User::class, Post::class, 'id', 'id', 'post_id', 'user_id');
    }
}
