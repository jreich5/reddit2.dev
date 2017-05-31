<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static $rules = [
        'title' => 'required|between:3,60',
        'content' => 'required',
        'url' => 'url',
        'image' => 'size:1000'
    ];

	protected $fillable = ['title', 'url', 'image', 'content', 'created_by'];

	public function user()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

}
