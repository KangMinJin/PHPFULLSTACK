@extends('layout.layout')
@section('title', 'WRITE')
@section('contents')
    <h1>글 작성</h1>
    @include('layout.errors')
    <form action="{{route('board.store')}}" method="post">
    @csrf
    <label for="title">제목 : </label>
    <input type="text" id="title" name="title">
    <br>
    <label for="content">내용 : </label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <br>
    <br>
    <button type="submit">작성</button>
    <button type="button" onclick="location.href='{{route('board.list')}}'">취소</button>
    </form>
@endsection