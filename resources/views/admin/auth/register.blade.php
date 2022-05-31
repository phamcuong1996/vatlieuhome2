<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="email"> <br>
    <input type="text" name="name" placeholder="name"> <br>
    <input type="password" name="password" placeholder="password"> <br>
    <input type="password" name="confirm-password" placeholder="confirm-password"> <br>
    <button type="submit">Dang Ky</button>
</form>

@if(session('success'))
    {{ session('success') }}
@endif
