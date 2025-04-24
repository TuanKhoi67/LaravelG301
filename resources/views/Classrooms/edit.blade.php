@extends('layouts.app')

@section('title', 'Update Class - Student Management')

@push('styles')
<style>
  body {
    background: linear-gradient(to right, #dff9fb, #f9f7f7);
    min-height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    {{--  align-items: center;  --}}
  }
  
  .card.shadow {
    border-radius: 1rem;
    padding: 2rem;
    max-width: 700px;
    width: 100%;
    background-color: white;
  }
  

    .form-label {
      font-weight: 600;
      
    }

    .btn-primary {
      background-color: #0984e3;
      border: none;
    }

    .btn-primary:hover {
      background-color: #74b9ff;
    }

    h2 {
      color: #2d3436;
    }
  </style>
@endpush

@section('content')


<div class="card shadow" style="margin-top: 7%; margin-left: 32%;">
  <h2 class="text-center mb-4"><i class="fas fa-edit me-2"></i>Update Class</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
      <strong><i class="fas fa-exclamation-triangle"></i> Error!</strong> Please double check the data you entered.
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('classes.update', $class->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name" class="form-label">Class Name</label>
      <input type="text" name="name" class="form-control" value="{{ $class->name }}" required>
    </div>

    <div class="mb-3">
      <label for="subject_id" class="form-label">Course</label>
      <select name="subject_id" class="form-select" required>
        @foreach ($subjects as $subject)
          <option value="{{ $subject->id }}" {{ $subject->id == $class->subject_id ? 'selected' : '' }}>
            {{ $subject->name }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="teacher_name" class="form-label">Teacher</label>
      <input type="text" name="teacher_name" class="form-control" value="{{ $class->teacher_name }}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Choose Students</label>
      <div class="form-check mb-2">
        <input type="checkbox" id="checkAll" class="form-check-input">
        <label for="checkAll" class="form-check-label">Select All</label>
      </div>

      <div class="row">
        @foreach ($students as $student)
          <div class="col-md-6">
            <div class="form-check">
              <input type="checkbox" name="student_ids[]" value="{{ $student->id }}"
                     class="form-check-input student-checkbox"
                     {{ $class->students->contains($student->id) ? 'checked' : '' }}>
              <label class="form-check-label">{{ $student->name }}</label>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
      <a href="{{ route('classes.index') }}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left me-1"></i>Back</a>
      <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i>Update Class</button>
    </div>
  </form>
</div>

<script>
  document.getElementById('checkAll').addEventListener('change', function () {
    const checkboxes = document.querySelectorAll('.student-checkbox');
    checkboxes.forEach(cb => cb.checked = this.checked);
  });
</script>

@endsection
