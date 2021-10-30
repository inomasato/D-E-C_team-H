@extends('layouts.main')
@section('title','INDEX')
@section('css')
<link rel="stylesheet" href="{{ asset('..\resources\css\create.css') }}">
@endsection
@section('user_trueName',$user_data->user_trueName)
@section('content')
    <tr class="tweets_form"><th>投稿フォーム</th></tr>
    <div class='writing'>
        <form method="post" actions="/sharet/create">
          <textarea class= "create" name="sharet" >投稿しよう
          </textarea><br>
        </form>
        <input type="radio" class= "button1" name="feel">
        <div class="positive" >ポジティブ</div> 
        <input type="radio" class= "button2" name="feel">
        <div class="negative">ネガティブ</div> 
        <input type="submit"  class="do" value="投稿する">
        <input type="submit" class="undo" value="投稿しない">
    </div>
@endsection
@section('footer') 