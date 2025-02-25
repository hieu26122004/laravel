<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = [
        'content',
        'likes',
        'user_id'
    ];
    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function isLikedByUser($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }
}
