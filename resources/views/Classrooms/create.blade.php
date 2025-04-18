<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Lớp Học Mới</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2>Tạo lớp học mới</h2>
    
        <form action="{{ route('classes.store') }}" method="POST">
            @csrf
    
            <div class="mb-3">
                <label for="name" class="form-label">Tên lớp</label>
                <input type="text" name="name" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label for="subject_id" class="form-label">Môn học</label>
                <select name="subject_id" class="form-select" required>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Giáo viên</label>
                <input type="text" name="teacher_name" class="form-control" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Chọn học sinh</label>
                <div class="form-check mb-2">
                    <input type="checkbox" id="checkAll" class="form-check-input">
                    <label for="checkAll" class="form-check-label">Chọn tất cả</label>
                </div>
    
                @foreach ($students as $student)
                    <div class="form-check">
                        <input type="checkbox" name="student_ids[]" value="{{ $student->id }}" class="form-check-input student-checkbox">
                        <label class="form-check-label">{{ $student->name }}</label>
                    </div>
                @endforeach
            </div>
    
            <button type="submit" class="btn btn-success">Lưu lớp học</button>
        </form>
    </div>
    
    <script>
        document.getElementById('checkAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.student-checkbox');
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
