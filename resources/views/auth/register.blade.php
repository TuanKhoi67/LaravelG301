<h2>Đăng ký</h2>

<form method="POST" action="/register">
    @csrf
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required><br>
    <button type="submit">Đăng ký</button>
</form>

<a href="/login">Đã có tài khoản? Đăng nhập</a>
