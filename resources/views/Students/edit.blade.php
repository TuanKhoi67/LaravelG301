<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Sửa Sinh Viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="/">Quản Lý SV</a>
    </nav>

    <div class="container py-5">
        <h2 class="text-center mb-4">Sửa Sinh Viên</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Tên sinh viên</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="gmail" class="form-label">Email</label>
                <input type="email" name="gmail" class="form-control" value="{{ old('gmail', $student->gmail) }}" required>
                @error('gmail') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="student_code" class="form-label">Mã sinh viên</label>
                <input type="text" name="student_code" class="form-control" value="{{ old('student_code', $student->student_code) }}" required>
                @error('student_code') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Tuổi</label>
                <input type="number" name="age" class="form-control" value="{{ old('age', $student->age) }}" required>
                @error('age') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn btn-warning">Cập nhật Sinh Viên</button>
        </form>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2025 Hệ thống quản lý sinh viên
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
