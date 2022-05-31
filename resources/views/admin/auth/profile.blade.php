<form action="{{route('profile')}}" method="post">
    @csrf
    @method('put')
    <input type="text" value="" disabled>
    <input type="text" name="name" value="">

    <input type="password" name="password" value="">
    <button type="submit">Update</button>
</form>

