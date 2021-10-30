@extends('layouts.main')

@section('mypage.css')

@section('title')
    @parent
    マイページ
@endsection

@section('content')

    <h2>{{ $data['user_nickName'] }}</h2>
    <p class = "trueName" >{{ $data['user_trueName'] }}</p>
    <p class = "likecount">{{ $data['user_likeCount'] }}</p>
    <a href="follower.php">あなたの応援者</a>
    <p class = "profile">{{ $data['user_profile'] }}</p>
    <a href="edit.php">プロフィールを編集する</a>
    {{-- テーブルを作ります --}}

@endsection
