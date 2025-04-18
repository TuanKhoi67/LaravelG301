<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh sửa hồ sơ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="mb-4 text-center">Chỉnh sửa thông tin cá nhân</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="/profile/edit" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
            @csrf

            <div class="mb-3">
                <label for="username" class="form-label">Tên người dùng</label>
                <input type="text" class="form-control" name="username" id="username" value="{{ old('username', Auth::user()->username) }}" required>
                @error('username') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Địa chỉ Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', Auth::user()->phone) }}">
                @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input type="file" class="form-control" name="avatar" id="avatar">
                @if(Auth::user()->avatar)
                    <div class="mt-2">
                        <img src="{{ asset(Auth::user()->avatar) }}" alt="Avatar" class="img-thumbnail" width="100">
                    </div>
                @endif
                @error('avatar') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu mới (không bắt buộc)</label>
                <input type="password" class="form-control" name="password" id="password">
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
            </div>

            <div class="d-flex justify-content-between">
                <a href="/profile" class="btn btn-secondary">Hủy</a>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
