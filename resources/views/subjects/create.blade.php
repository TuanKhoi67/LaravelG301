<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Mới Môn Học</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Thêm Môn Học Mới</h2>
        <form action="{{ route('subjects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên Môn Học</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Chi Tiết</label>
                <textarea class="form-control" id="detail" name="detail" required></textarea>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Loại</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="Khoa học">Khoa học</option>
                    <option value="Tự nhiên">Tự nhiên</option>
                    <option value="Xã hội">Xã hội</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
