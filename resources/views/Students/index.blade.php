<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>List of Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f1f2f6;
        }

        .table-hover tbody tr:hover {
            background-color: #f9f9f9;
        }

        .btn-warning {
            background-color: #ffeaa7;
            color: #2d3436;
            border: none;
        }

        .btn-danger {
            background-color: #fab1a0;
            color: #2d3436;
            border: none;
        }

        .btn-warning:hover {
            background-color: #fdcb6e;
        }

        .btn-danger:hover {
            background-color: #ff7675;
        }

        footer {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="/"><i class="fas fa-user-graduate me-2"></i>Student Management</a>
    </nav>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2><i class="fas fa-list-ul me-2"></i>List of Students</h2>
            <a href="{{ route('students.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Add Student</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Student ID</th>
                        <th>Age</th>
                        <th style="width: 160px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->gmail }}</td>
                            <td>{{ $student->student_code }}</td>
                            <td>{{ $student->age }}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if ($students->isEmpty())
                        <tr>
                            <td colspan="5" class="text-center text-muted">No students found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg-secondary text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2025 Student Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
