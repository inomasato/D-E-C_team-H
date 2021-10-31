
@extends('layouts.main')

@section('title')
    @parent
    マイページ
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('..\resources\css\mypage.css') }}">
@endsection
@section('content')

@foreach ($items as $item)
@if ($user_judge == 0 )
    <div class="tweet_frame">
            <div class="tweet_head">
                <div class="icon_frame">
                    <div class="icon" style="color:{{ $item['user_iconColor'] }}; background-color:{{ $item['user_iconBack'] }}; border: solid{{ $item['user_iconFrame'] }}">
                        {{ $item['user_iconText'] }}
                    </div>
                </div>
            </div>
                <div class="my_nickName">
                    {{ $item['user_nickName'] }}
                </div>
                <div class="my_trueName">
                    {{ $item['user_trueName'] }}
                </div>
                <div class="my_likeCount">
                    {{ $item['user_likeCount'] }}
                </div>
                <div class="my_profile">
                    {{ $item['user_profile'] }}
                </div>
            </div>
            <button class = "edit.php">プロフィールを編集する</button>
        </button>
    </div>
    @else
    <div class="tweet_frame">
        <div class="tweet_head">
            <div class="icon_frame">
                <div class="icon" style="color:{{ $item['user_iconColor'] }}; background-color:{{ $item['user_iconBack'] }}; border: solid{{ $item['user_iconFrame'] }}">
                    {{ $item['user_iconText'] }}
                </div>
            </div>
        </div>
            <div class="my_nickName">
                {{ $item['user_nickName'] }}
            </div>
            <div class="my_trueName">
                {{ $item['user_trueName'] }}
            </div>
            <div class="my_likeCount">
                {{ $item['user_likeCount'] }}
            </div>
            <div class="my_profile">
                {{ $item['user_profile'] }}
            </div>
        </div>
    </div>
    @endif
@endforeach
@endsection
