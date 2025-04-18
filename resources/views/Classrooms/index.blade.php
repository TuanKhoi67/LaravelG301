<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Lớp Học</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Danh Sách Lớp Học</h2>
        <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Thêm Lớp Học</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên Lớp</th>
                    <th>Môn Học</th>
                    <th>Học Sinh</th>
                    <th>Tên Giáo Viên</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classRooms as $classRoom)
                    <tr>
                        <td>{{ $classRoom->name }}</td>
                        <td>{{ $classRoom->subject->name }}</td>
                        <td>
                            @foreach($classRoom->students as $student)
                                <span class="badge bg-info">{{ $student->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ $classRoom->teacher_name }}</td>
                        <td>
                            <a href="{{ route('classes.edit', $classRoom->id) }}" class="btn btn-warning">Sửa</a>
                            <form action="{{ route('classes.destroy', $classRoom->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
