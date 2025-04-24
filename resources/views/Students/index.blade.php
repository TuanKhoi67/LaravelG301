@extends('layouts.app')

@section('title', 'List of Students - Student Management')

@push('styles')
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
@endpush
@section('content')
<body>
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

</body>
@endsection
