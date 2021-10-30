@extends('layouts.main')
@section('title','INDEX')
@section('css')
<link rel="stylesheet" href="{{ asset('..\resources\css\index.css') }}">
@endsection

@section('user_trueName',$user_trueName)
@section('content')
    <div class='inner'>
        <h1 class='content_text'>これはH1ページだ</h1>
    </div>
@endsection
@section('footer')