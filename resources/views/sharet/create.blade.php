@extends('layouts.main')
@section('title','INDEX')
@section('css')
<link rel="stylesheet" href="{{ asset('..\resources\css\create.css') }}">
@endsection
@section('user_trueName',$user_data->user_trueName)
@section('content')
<div class= 'contents'>
    <div class = tweets_form>投稿フォーム</div>
    <div class='writing'>
        <form method="post" actions="/sharet/create">
            @csrf
            <textarea class= "create" name="tweet_content" >投稿しよう</textarea>
            <div class="type_box">
              <div class="types">
                <div class="radios"><input type="radio" class= "buttons" name="tweet_type" value="ポジティブ"></div>
                <div class="positive" >ポジティブ</div> 
              </div>
              <div class="types">
                <div class="radios"><input type="radio" class= "buttons" name="tweet_type" value="ネガティブ"></div>
                <div class="negative">ネガティブ</div> 
              </div>
            </div>
            
            <button type="submit"  class="do" value="投稿する">
        </form>
          <input type="submit" class="undo" value="投稿しない">  
      </div>
</div>
@endsection
@section('footer') 