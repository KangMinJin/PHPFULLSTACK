@extends('layout.layout')

@section('title', 'LOGIN')
@include('layout.errors')
@section('contents')
    <form action="{{route('user.loginpost')}}" method="post">
    @csrf
    <label for="email">EMAIL : </label>
    <input type="text" id="email" name="email">
    <br>
    <label for="password">PW : </label>
    <input type="password" id="password" name="password">
    <br>
    <button type="submit">로그인</button>
    </form>
@endsection