<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>class list</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h2>class list</h2>
        <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Create new class</a>
    
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Class name</th>
                    <th>course</th>
                    <th>teacher</th>
                    <th>student</th>
                    <th>act</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classrooms as $class)
                    <tr>
                        <td>{{ $class->name }}</td>
                        <td>{{ $class->subject->name }}</td>
                        <td>{{ $class->teacher_name }}</td>
                        <td>
                            <ul>
                                @foreach ($class->students as $student)
                                    <li>{{ $student->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">update</a>
                            <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chứ?')">delete</button>
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
