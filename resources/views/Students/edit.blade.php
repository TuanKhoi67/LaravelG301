@extends('layouts.app')

@section('title', 'Update Student - Student Management')

@push('styles')
    <style>
        body {
            background: linear-gradient(to right, #f1f2f6, #dfe6e9);
        }

        .card {
            max-width: 600px;
            margin: 60px auto;
            padding: 30px;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-warning {
            background-color: #fdcb6e;
            border: none;
        }

        .btn-warning:hover {
            background-color: #ffeaa7;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
@endpush

@section('content')
<body>

    <div class="card">
        <h2 class="text-center mb-4"><i class="fas fa-edit me-2"></i>Update Student</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="gmail" class="form-label">Email</label>
                <input type="email" name="gmail" class="form-control" value="{{ old('gmail', $student->gmail) }}" required>
                @error('gmail') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="student_code" class="form-label">Student ID</label>
                <input type="text" name="student_code" class="form-control" value="{{ old('student_code', $student->student_code) }}" required>
                @error('student_code') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" value="{{ old('age', $student->age) }}" required min="10" max="100">
                @error('age') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-warning w-100"><i class="fas fa-save me-2"></i>Update Student</button>
        </form>
    </div>

</body>
@endsection
