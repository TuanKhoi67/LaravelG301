<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Thêm Sinh Viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="/">Quản Lý SV</a>
    </nav>

    <div class="container py-5">
        <h2 class="text-center mb-4">Thêm Sinh Viên</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="gmail" class="form-label">Gmail</label>
                <input type="email" class="form-control" id="gmail" name="gmail" required>
            </div>
            <div class="mb-3">
                <label for="student_code" class="form-label">Mã sinh viên</label>
                <input type="text" class="form-control" id="student_code" name="student_code" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Tuổi</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>

            <button type="submit" class="btn btn-success">Thêm Sinh Viên</button>
        </form>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2025 Hệ thống quản lý sinh viên
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
