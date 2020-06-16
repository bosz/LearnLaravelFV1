<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $dates = [
		'created_at', 'updated_at',
	];
    // RELATIONSHIP Post has many comments
    public function comments()
    {
    	return $this->hasMany(\App\Comment::class, 'post_id')->orderBy('id', 'desc');
    }
}
