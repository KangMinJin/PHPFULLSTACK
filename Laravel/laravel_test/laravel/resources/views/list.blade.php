@extends('layout.layout')
@section('title', 'LIST')
@section('contents')
    <h1>리스트이빈다.</h1>
    <a href="{{route('board.write')}}">글작성</a>
    @include('layout.errors')
    @forelse($list as $item)
        <p>{{$item->title}} : {{$item->write_user_id}}</p>
    @empty
        <p>자료 없음</p>
    @endforelse
@endsection