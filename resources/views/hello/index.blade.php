@extends('layouts.helloapp')
@section('title','Index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
 
    <table>
        <tr><th>NAME</th><th>MAIL</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->mail }}</td>
                <td>{{ $item->age }}</td>
            </tr>
        @endforeach
    </table>

    <p><a href="hello/add">INSERT</a></p>


    {{-- @if (count($errors) > 0)
    <p>入力に問題があるみたいだ！もう一度入力してみてくれ！</p>
    @else
    <p>{{ $msg }}</p>
    @endif

    <form action="hello" method="POST">
        @csrf
        <table>

            @if ($errors->has('name'))<tr><td>ERROR </td><td>{{ $errors->first('name') }}</td></tr>@endif
            <tr><td> name : </td><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>
            <tr><td>-</td><td>-</td></tr>
            @if ($errors->has('mail'))<tr><td>ERROR </td><td>{{ $errors->first('mail') }}</td></tr>@endif
            <tr><td> mail : </td><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>
            <tr><td>-</td><td>-</td></tr>
            @if ($errors->has('age'))<tr><td>ERROR </td><td>{{ $errors->first('age') }}</td></tr>@endif
            <tr><td> age : </td><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>
            <tr><td>-</td><td>-</td></tr>
            <tr><td> input? : </td><td><input type="submit" value="send"></td></tr>
        </table>
    </form> --}}

    {{-- <p>これは<middleware>google.com</middleware>へのリンクだぜ！</p>
    <p>これは<middleware>youtube.com</middleware>へのリンクだぜ！</p>

     --}}

    {{-- <table>
        <tr>
            <th>NAME</th>
            <th>MAIL</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['mail'] }}</td>
        </tr>
        @endforeach
    </table> --}}

    {{-- <ul>
        @each('components.item',$data,'item')
    </ul>
    <p>Controller Value<br>'message' = {{ $massage }}</p>
    <p>View Composer Value<br>'view_message' = {{ $view_massage }}</p> --}}

    {{-- @include('components.massage',['msg_title' => 'OK','msg_content' => 'サブビューだぜ！']) --}}

    {{-- @component('components.massage')
        
        @slot('msg_title')
        コンポーネントのタイトルだぜ！
        @endslot

        @slot('msg_content')
        こっちは本文だ！こんな風に処理を切り離すことができるんだぜ！
        ツイート機能には持ってこいの機能だな！
        <br>ｂｒタグで改行も可能だ！
        @endslot
        
    @endcomponent --}}

    @endsection


@section('footer')
copyright 2021 Rebellion_Joker
@endsection