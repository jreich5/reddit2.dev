<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public static $rules = [
        'user_id' => 'required',
        'post_id' => 'required',
        'vote' => 'required',
    ];

	protected $fillable = ['user_id', 'post_id', 'vote'];
}
