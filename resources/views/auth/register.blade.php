<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('css/register.css') }}" rel="stylesheet"></head>

<body>
    <form action="{{ route('auth.register') }}" method="POST">
        <h1>Register</h1>
        @csrf
        <div>
            <label for="MaSV">Mã sinh viên:</label>
            <input type="text" name="MaSV" required>
        </div>
        
        <div>
            <label for="TenSV">Tên sinh viên:</label>
            <input type="text" name="TenSV" required>
        </div>

        <div>
            <label for="NgaySinh">Ngày sinh:</label>
            <input type="date" name="NgaySinh" required>
        </div>

        <div class="form-group">
            <label for="GioiTinh">Giới tính:</label>
            <select name="GioiTinh" class="form-select">
                <option selected>Giới tính</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>

        <div>
            <label for="DiaChi">Địa chỉ</label>
            <input type="text" name="DiaChi" required>
        </div>

        <div>
            <label for="SDT">Số điện thoại</label>
            <input type="text" name="SDT" required>
        </div>

        <div>
            <label for="password">Mật khẩu</label>
            <input type="password" name="Password" required>
        </div>

        <button type="submit">Register</button>

        <a href="login">Đăng nhập</a>
    </form>
</body>
</html>