
{{-- 상속 --}}
@extends('layout.layout')

{{-- 부모 템플릿에 해당하는 yield 부분에 자리를 차지 --}}
@section('title', '자식 타이틀')

{{-- 처리해아하는 코드가 많을 경우에는, @section ~ @endsection에 소스코드를 기재 --}}
{{-- @section('contents')
    <h2>콘텐츠 섹션입니다.</h2>
    <p>졸려요</p>
    <p>콘텐츠 끝</p>
@endsection --}}
{{-- @endsection사용시 여러 콘텐츠가 들어갈 수 있다! --}}

{{-- @section('test')
    <h2>자식의 섹션입니다.</h2>
    <p>피곤피곤</p>
@endsection --}}

{{-- 조건문 --}}
@section('if')
    <hr>
    <h4>IF</h4>
    @if($data['gender'] === '남자')
        <span>남자입니다</span>
    @elseif($data['addr'] === '대구')
        <span>대구사람입니다</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection
{{-- section이 나중에 실행되어 순서가 뒤죽박죽이 되므로 블레이드 템플릿은 왠만하면 섹션으로 묶어준다! --}}

@section('for')
    <hr>
    <h4>FOR</h4>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- * foreach와 forelse의 경우, $loop변수가 자동 생성되고 사용 할 수 있다. --}}
{{-- laravel 책 124페이지 참조 --}}
@section('foreach')
    <hr>
    <h4>FOREACH</h4>
    @foreach($data as $key => $val)
        <span>{{$loop->count.' - '.$loop->iteration.' = '.$loop->remaining.' '}}</span>
        <span>{{$key." => ".$val}}</span>
        <br>
    @endforeach
@endsection

@section('forelse')
    <hr>
    <h4>FORELSE</h4>
    @forelse($data2 as $key => $val)
        <span>{{$key." => ".$val}}</span>
    {{-- 빈 배열이면 @empty 부분 실행 --}}
    @empty
        <span>빈배열인디유...</span>
    @endforelse
@endsection