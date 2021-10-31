@extends('layouts.main')
@section('title','INDEX')
@section('css')
<link rel="stylesheet" href="{{ asset('..\resources\css\reply.css') }}">
@endsection

@section('user_trueName')
@section('content')
    @include('layouts.showTweet')
    @include('layouts.showReply')
@endsection
@section('footer')