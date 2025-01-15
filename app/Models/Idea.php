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
}
