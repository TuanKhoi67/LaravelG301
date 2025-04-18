<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chỉnh Sửa Lớp Học</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2>Chỉnh sửa lớp học</h2>
    
        <form action="{{ route('classes.update', $classroom->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label class="form-label">Tên lớp</label>
                <input type="text" name="name" class="form-control" value="{{ $classroom->name }}" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Môn học</label>
                <select name="subject_id" class="form-select" required>
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ $classroom->subject_id == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Giáo viên</label>
                <input type="text" name="teacher_name" class="form-control" value="{{ $classroom->teacher_name }}" required>
            </div>
    
            <div class="mb-3">
                <label class="form-label">Chọn học sinh</label>
                <div class="form-check mb-2">
                    <input type="checkbox" id="checkAll" class="form-check-input">
                    <label for="checkAll" class="form-check-label">Chọn tất cả</label>
                </div>
    
                @foreach ($students as $student)
                    <div class="form-check">
                        <input type="checkbox" name="student_ids[]" value="{{ $student->id }}"
                               class="form-check-input student-checkbox"
                               {{ $classroom->students->contains($student->id) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $student->name }}</label>
                    </div>
                @endforeach
            </div>
    
            <button type="submit" class="btn btn-primary">Cập nhật</button>
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
