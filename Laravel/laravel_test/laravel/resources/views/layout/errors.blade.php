@if($errors->any())
    @foreach($errors->all() as $error) {{-- $errors는 객체이므로 all() 사용 --}}
        <div style="color:red;">{{$error}}</div>
    @endforeach
@endif