@extends('layouts.main')

@section('title')
    @parent
    マイページ
@endsection

@section('content')
    <h2>{{ $user_nickName }}</h2>
    <p class = "trueName" >{{ $user_trueName }}</p>
    <p class = "likecount">{{ $user_likeCount }}</p>
    <a href="follower.php">あなたの応援者</a>
    <p class = "profile">{{ $user_profile }}</p>
    <a href="edit.php">プロフィールを編集する</a>
    {{-- テーブルを作ります --}}

@endsection
