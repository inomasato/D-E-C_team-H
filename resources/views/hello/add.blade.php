@extends('layouts.helloapp')

@section('title','add')

@section('menubar')
    @parent
    新規作成していくぜ～！
@endsection

@section('content')

    <form action="add" method="POST">
    <table>
        @csrf
        @if ($errors->has('name'))
        <tr><td>-</td><td>-</td></tr>
        <tr><td>ERROR </td><td>{{ $errors->first('name') }}</td></tr>
        @endif
        <tr><td> name </td><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>
        
        @if ($errors->has('mail'))
        <tr><td>-</td><td>-</td></tr>
        <tr><td>ERROR </td><td>{{ $errors->first('mail') }}</td></tr>
        @endif
        <tr><td> mail </td><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>

        @if ($errors->has('age'))
        <tr><td>-</td><td>-</td></tr>
        <tr><td>ERROR </td><td>{{ $errors->first('age') }}</td></tr>
        @endif
        <tr><td> age </td><td><input type="text" name="age" value="{{ old('age') }}"></td></tr>
        
        <tr><td> input</td><td><input type="submit" value="send"></td></tr>
    </table>
    </form>

    <p><a href="hello"></a></p>

@endsection

@section('footer')
copyright 2020 Rebellion_Joker
@endsection