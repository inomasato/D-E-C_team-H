@extends('layouts.main')

@section('mypage.css')

@section('title')
    @parent
    マイページ
@endsection

@section('content')
    {{-- @foreach ($datas as $data)
        <div>{{ $data->user_nickName }}</div>
        <div>{{ $data->user_trueName }}</div>
        <div>{{ $data->user_likeCount }}</div>
        <div>{{ $data->user_profile }}</div>
    @endforeach --}}
{{-- 
    <h2>{{ $user_data[$user_nickName] }}</h2>
    <p class = "trueName" >{{ $user_data['user_trueName'] }}</p>
    <p class = "likecount">{{ $user_data['user_likeCount'] }}</p>
    <a href="follower.php">あなたの応援者</a>
    <p class = "profile">{{ $user_data['user_profile'] }}</p>
    <a href="edit.php">プロフィールを編集する</a> --}}
    {{-- テーブルを作ります --}}

    @include('layouts.showTweet')

@endsection
