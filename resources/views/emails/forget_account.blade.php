<div style="width: 600px; margin: 0 auto">
    <div style="text-align: center">
        <h2>Xin chào {{$user->name}}</h2>
        <p>Email này giúp bạn lấy lại tài khoản đã bị quên</p>
        <p>Vui lòng nhấn vào nút kích hoạt bên dưới để đặt lại mật khẩu</p>
        <i>Lưu ý: Mã xác nhận trong link chỉ có hiệu lực trong vòng 72h</i>
        <p>
            <a href="{{route('get_pass', ['user' => $user->id,'token' =>$user->token])}}"
               style="display: inline-block; background: green; color: white; padding: 7px 25px; font-weight: bold">Đặt lại mật khẩu</a>
        </p>
    </div>
</div>
