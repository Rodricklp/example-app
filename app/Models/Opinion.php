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
        $this->belongsTo(Post::class);
    }

    public function user() {
        $this->belongsTo(User::class);
    }

    public function getUser() {
        $this->hasManyThrough(User::class, Post::class);
    }
}
