<div style="width: 600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$user->name}}</h2>
        <p>Chúc mừng bạn đã tạo tài khoản thành công</p>
        <p>Để sử dụng được vui lòng nhấn vào nút kích hoạt bên dưới để kích hoạt tài khoản</p>
        <p>
            <a href="{{route('admin.user.active', ['user' => $user->id,'token' =>$user->token])}}"
               style="display: inline-block; background: green; color: white; padding: 7px 25px; font-weight: bold">Kích hoạt tài khoản</a>
        </p>
    </div>
</div>
<h3>Thông Tin Tài Khoản</h3>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
</table>



