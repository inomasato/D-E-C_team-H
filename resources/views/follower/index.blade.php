@extends('layouts.main')

@section('title')
    @parent
    フォローリスト
@endsection

@section('content')
<p>{{ $session_data }}</p>
<table>
    <tr><th>あなたを応援している方↓</th></tr>
    @foreach ($items as $item)
    <tr>
        <td>
            @if($user_id = 'user_id'){
                {{ $item->user_nickName }}
            }
            @else{
                投稿してみよう！！
            }
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection
