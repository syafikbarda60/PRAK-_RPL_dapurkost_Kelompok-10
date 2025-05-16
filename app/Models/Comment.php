<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

use MongoDB\Laravel\Eloquent\Model;

class comment extends Model
{
    protected $connection = 'mongodb';
    protected $table = 'comments';

    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
