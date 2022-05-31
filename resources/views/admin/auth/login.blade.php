<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="email">
    <input type="password" name="password">
    <button type="submit">Dang Nhap</button>
</form>
@if(session('error'))
    {{ session('error') }}
@endif
