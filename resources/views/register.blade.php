<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded">
        <div class="card-body">
          <h3 class="mb-4 text-center">Đăng ký</h3>

          {{-- Error Message --}}
          @if($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ url('/register') }}">
            @csrf
            <div class="mb-3">
              <label>Tên người dùng:</label>
              <input type="text" name="username" class="form-control" required value="{{ old('username') }}">
            </div>
            <div class="mb-3">
              <label>Email:</label>
              <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
              <label>Mật khẩu:</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Số điện thoại:</label>
              <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <button type="submit" class="btn btn-success w-100">Đăng ký</button>
          </form>

          <div class="mt-3 text-center">
            Đã có tài khoản? <a href="{{ url('/login') }}">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
