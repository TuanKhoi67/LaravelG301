@extends('layouts.app')

@section('title', 'Create Class - Student Management')

@push('styles')
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 15px;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
@endpush
@section('content')
</head>
<body>
    <div class="container py-4">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary mb-4"><i class="fas fa-chalkboard-teacher me-2"></i>Create Class</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong> Please double check the data you entered.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('Classrooms.update', $class->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Class Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $class->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="subject_id" class="form-label">Course</label>
                    <select name="subject_id" class="form-select" required>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}" {{ $class->subject_id == $subject->id ? 'selected' : '' }}>
                                {{ $subject->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="teacher_name" class="form-label">Teacher Name</label>
                    <input type="text" name="teacher_name" class="form-control" value="{{ old('teacher_name', $class->teacher_name) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Choose Students</label>
                    <div class="form-check mb-2">
                        <input type="checkbox" id="checkAll" class="form-check-input">
                        <label for="checkAll" class="form-check-label">Select All Students</label>
                    </div>

                    @foreach ($students as $student)
                        <div class="form-check">
                            <input type="checkbox" name="students[]" value="{{ $student->id }}" class="form-check-input student-checkbox"
                                {{ in_array($student->id, $class->students->pluck('id')->toArray()) ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $student->name }}</label>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save me-2"></i>Save Class</button>
                    <a href="{{ route('Classrooms.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left me-2"></i>Go Back</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('checkAll').addEventListener('change', function () {
            const checkboxes = document.querySelectorAll('.student-checkbox');
            checkboxes.forEach(cb => cb.checked = this.checked);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
