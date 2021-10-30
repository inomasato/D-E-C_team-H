<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    // protected $guarded = array('user_id');

    public static $rules = array(
        'follower_id' => 'required',
        'follower_user_id' => 'required',
        'follow_user_id' => 'required'
    );
}