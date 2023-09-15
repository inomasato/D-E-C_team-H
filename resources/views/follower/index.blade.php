@extends('layouts.main')

@section('title')
    @parent
    フォローリスト
@endsection

@section('content')
<table>
    <tr><th>あなたを応援している方↓</th></tr>
    @foreach ($items as 'item')
    <tr>
        <td>
            var_dump($user_jadge);
            @if($user_nickName->user_nickName)
            @if($user_id->user_id){
                {{ (Sring)$item->user_nickName }}
            }
            @else{
                投稿してみよう！！
            }
            @endif
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection
