<form action="{{route('profile')}}" method="post">
    @csrf
    @method('put')
    <input type="text" value="{{auth()->user()->email}}" >
    <input type="text" name="name" value="{{auth()->user()->name}}">
    <input type="checkbox" name="change_password">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Update</button>
</form>
@if(session('success'))
    {{ session('success') }}
@endif

<a href="{{route('logout')}}">Đăng Xuất</a>

