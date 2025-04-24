@extends('layouts.app')

@section('title', 'Create Class - Student Management')

@push('styles')
    <style>
        body {
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            min-height: 100vh;
            display: flex;

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
<div class="container">
    <h2>Create new class</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('Classrooms.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">name class:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="teacher_name">teacher name:</label>
            <input type="text" name="teacher_name" class="form-control" value="{{ old('teacher_name') }}" required>
        </div>

        <div class="form-group">
            <label for="subject_id">Subject:</label>
            <select name="subject_id" class="form-control" required>
                <option value="">-- Choice Subject --</option>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span>Student</span>
                <button type="button" class="btn btn-sm btn-secondary" id="toggle-all">All</button>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($students as $student)
                        <div class="col-md-4">
                            <div class="form-check">
                                <input 
                                    type="checkbox" 
                                    name="student_ids[]" 
                                    value="{{ $student->id }}" 
                                    class="form-check-input student-checkbox" 
                                    id="student_{{ $student->id }}"
                                    {{ is_array(old('student_ids')) && in_array($student->id, old('student_ids')) ? 'checked' : '' }}
                                >
                                <label class="form-check-label" for="student_{{ $student->id }}">
                                    {{ $student->name }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('toggle-all');
        const checkboxes = document.querySelectorAll('.student-checkbox');
        let allChecked = false;

        toggleBtn.addEventListener('click', function () {
            allChecked = !allChecked;
            checkboxes.forEach(checkbox => checkbox.checked = allChecked);
            toggleBtn.textContent = allChecked ? 'Bỏ chọn tất cả' : 'Chọn tất cả';
        });
    });
</script>
@endsection
