<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // to make it mass-assignable using Eloquent `create` method
    protected $fillable = ['comment'];
}
