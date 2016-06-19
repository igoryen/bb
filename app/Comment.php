<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // to make it mass-assignable using Eloquent `create` method
    protected $fillable = ['comment'];

    // M:Comment --- User:1
    // many comments can be had by / belong to 1 User
    public function user() {
        return $this->belongsTo(User::class); // this (comment) belongs to User
    }
}
