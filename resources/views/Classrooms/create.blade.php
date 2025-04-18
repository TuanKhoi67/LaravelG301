<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Lớp Học Mới</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Thêm Lớp Học Mới</h2>
        <form action="{{ route('classes.store') }}" method="POST">
            @csrf
        
            <!-- Tên lớp, giáo viên, môn học -->
            <div class="mb-3">
                <label for="name" class="form-label">Tên lớp</label>
                <input type="text" class="form-control" name="name" required>
            </div>
        
            <div class="mb-3">
                <label for="teacher_name" class="form-label">Tên giáo viên</label>
                <input type="text" class="form-control" name="teacher_name" required>
            </div>
        
            <div class="mb-3">
                <label for="subject_id" class="form-label">Môn học</label>
                <select class="form-control" name="subject_id" required>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
        
            <!-- Danh sách học sinh -->
            <div class="mb-3">
                <label class="form-label">Chọn học sinh</label>
                <div>
                    <input type="checkbox" id="checkAll"> <label for="checkAll">Chọn tất cả</label>
                </div>
                @foreach($students as $student)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="students[]" value="{{ $student->id }}" id="student{{ $student->id }}">
                        <label class="form-check-label" for="student{{ $student->id }}">{{ $student->name }}</label>
                    </div>
                @endforeach
            </div>
        
            <button type="submit" class="btn btn-primary">Tạo lớp</button>
        </form>
        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('checkAll').onclick = function () {
            const checkboxes = document.querySelectorAll('input[name="students[]"]');
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        };
    </script>
</body>
</html>
