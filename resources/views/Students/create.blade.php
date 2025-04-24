@extends('layouts.app')

@section('title', 'Add Student - Student Management')

@push('styles')
<style>
  body {
    background: linear-gradient(to right, #dfe6e9, #f1f2f6);
  }

  .card {
    max-width: 600px;
    margin: auto;
    margin-top: 60px;
    padding: 30px;
    border-radius: 1rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    background-color: #fff;
  }

  h2 {
    color: #2d3436;
  }

  .form-label {
    font-weight: 600;
  }

  .btn-success {
    background-color: #00b894;
    border: none;
  }

  .btn-success:hover {
    background-color: #55efc4;
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
    <h2 class="text-center mb-4"><i class="fas fa-user-plus me-2"></i>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="mb-3">
        <label for="gmail" class="form-label">Email</label>
        <input type="email" class="form-control" id="gmail" name="gmail" required>
      </div>

      <div class="mb-3">
        <label for="student_code" class="form-label">Student ID</label>
        <input type="text" class="form-control" id="student_code" name="student_code" required>
      </div>

      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" required min="10" max="100">
      </div>

      <button type="submit" class="btn btn-success w-100"><i class="fas fa-plus-circle me-1"></i>Add Student</button>
    </form>
  </div>

</body>
@endsection
