<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow rounded">
        <div class="card-body">
          <h3 class="mb-4 text-center">Đăng nhập</h3>

          {{-- Success Message --}}
          @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

          {{-- Error Message --}}
          @if($errors->any())
            <div class="alert alert-danger">
              {{ $errors->first() }}
            </div>
          @endif

          <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
              <label>Email:</label>
              <input type="email" name="email" class="form-control" required value="{{ old('email') }}">
            </div>
            <div class="mb-3">
              <label>Mật khẩu:</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
          </form>
          <div class="mt-3 text-center">
            Chưa có tài khoản? <a href="{{ url('/register') }}">Đăng ký</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
