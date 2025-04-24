@extends('layouts.app')

@section('title', 'Login - Student Management')

@push('styles')
  <style>
    body {
      background: linear-gradient(to right, #74ebd5, #9face6);
      min-height: 100vh;
      display: flex;

      justify-content: center;
    }
  </style>
@endpush
@section('content')
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4 border-0">
        <div class="card-header bg-primary text-white text-center rounded-top-4">
          <h3 class="my-2"><i class="fa-solid fa-user-lock me-2"></i>Login to Your Account</h3>
        </div>
        <div class="card-body p-4">

          {{-- Success Message --}}
          @if(session('success'))
            <div class="alert alert-success text-center">
              {{ session('success') }}
            </div>
          @endif

          {{-- Error Message --}}
          @if($errors->any())
            <div class="alert alert-danger text-center">
              {{ $errors->first() }}
            </div>
          @endif

          <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" name="email" id="email" class="form-control" required placeholder="name@example.com" value="{{ old('email') }}">
              </div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" required placeholder="Enter your password">
              </div>
            </div>

            <button type="submit" class="btn btn-success w-100">
              <i class="fa-solid fa-right-to-bracket me-1"></i>Login
            </button>
          </form>

          <div class="mt-4 text-center">
            <small>Don't have an account? <a href="{{ url('/register') }}" class="text-primary fw-bold">Register here</a></small>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
