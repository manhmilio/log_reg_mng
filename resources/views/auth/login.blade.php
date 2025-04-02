<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"></head>

<body>
    <form action="{{ route('auth.login') }}" method="POST">
        <h1>Login</h1>
        @csrf
        <div>
            <label for="MaSV">Mã sinh viên:</label>
            <input type="text" name="MaSV" required>
        </div>
        <div>
            <label for="Password">Mật Khẩu:</label>
            <input type="password" name="Password" required>
        </div>
        <button type="submit">Login</button>

        <a href="register">Đăng ký</a>
    </form>
</body>
</html>