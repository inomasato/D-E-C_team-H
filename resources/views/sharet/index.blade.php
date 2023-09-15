@extends('layouts.main')
@section('title','INDEX')
@section('css')
<link rel="stylesheet" href="{{ asset('..\resources\css\index.css') }}">
@endsection

@section('user_trueName','テスト')
@section('content')
    @include('layouts.showTweet')
@endsection
@section('footer')