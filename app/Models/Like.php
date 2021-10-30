<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class Like extends Model
{

    protected $table = 'like';

    public function getLike($user_id,$likeCount){

        $likes = DB::table($this->table)->where('like_user_id',$user_id)->limit($likeCount)->get();
        
        return $likes;

    }
}
