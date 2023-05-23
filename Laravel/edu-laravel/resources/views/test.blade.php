<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTS</title>
</head>
<body>
    <h1>Tests.index</h1>
    
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index')}}">Tasks.index</a>
    <br>
    <a href="{{route('tasks.show', ['task' => 13])}}">Tasks.show</a>
    <br>
            {{-- 세그먼트 파라미터가 필요한 주소는 이렇게 준다. -> Tasks.show의 주소는 tasks/{task} 이므로 (php artisan route:list 로 확인하면 됨) --}}
    <form action="{{route('tasks.update', ['task' => 13])}}" method="POST">
        @csrf
        @method('put') {{-- update는 PUT이거나 PATCH 방식이어야 하는데 form태그는 메소드가 get,post 두 방법밖엔 없으므로 @method('put')이라고 적어준다 --}}
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit">Tasks.update</button>
    </form>
    <hr>
    <a href="{{route('tasks.edit', ['task' => 999])}}">Tasks.edit</a>

    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        <input type="text" id="id" name="id" placeholder="아이디">
        <br>
        <input type="password" id="pw" name="pw" placeholder="비밀번호">
        <button type="submit">Tasks.store</button>
    </form>
</body>
</html>
