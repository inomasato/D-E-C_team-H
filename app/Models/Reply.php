<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Template\Template;

class Reply extends Model
{

    protected $table = 'reply';

    public function getReply($tweet_id,$tweet_replyCount)
    {
        $tweet_replyCount = 5;
        // var_dump([$tweet_id,$tweet_replyCount]);
        // exit();

        $selectColumn = ['user.user_id','user.user_iconText','user.user_iconColor','reply.reply_tweet_id',
        'user.user_iconBack','user.user_iconFrame','template.template_word','reply.reply_id'];

        $replys = DB::table($this->table)->join('user',function($join){
            $join->on('reply.reply_user_id','=','user.user_id');
        })->join('template',function($join){
            $join->on('reply.reply_template_id','=','template.template_id');
        })->where('reply.reply_tweet_id',$tweet_id)->limit($tweet_replyCount)->get($selectColumn);

        return $replys;

    }

    public function deleteReply($delete_id){
        DB::table($this->table)->where('reply_id',$delete_id)->delete();
        return ;
    }

    public function getTemplate()
    {
        $template = DB::table('template')->get();
        
        return (array)$template;
        
    }



}
