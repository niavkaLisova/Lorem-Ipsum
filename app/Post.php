<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamp = true;

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
