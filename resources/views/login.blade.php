@extends('layouts.app')

@section('title', 'Login - Student Management')

@push('styles')
  <style>
    html, body {
      height: 100%;
      
      background: linear-gradient(to right, #74ebd5, #9face6);
    }
    .login-wrapper {
      display: flex;
      min-height: 100vh;
      align-items: center;
      justify-content: center;
    }

    .login-left {
      background: url('https://phunuso.mediacdn.vn/603486343963435008/2024/5/2/hoctap2-17146198209591691194656.png') no-repeat center center;
      background-size: cover;
      border-top-left-radius: 1rem;
      border-bottom-left-radius: 1rem;
    }

    .login-card {
      overflow: hidden;
      border-radius: 2rem;
    }

    @media (max-width: 768px) {
      .login-left {
        display: none;
      }
    }
  </style>
@endpush

@section('content')
<div class="container-fluid login-wrapper">
  <div class="row w-100 justify-content-center">
    <div class="col-md-10 col-lg-8">
      <div class="card login-card shadow-lg border-0">
        <div class="row g-0">
          <!-- Left Image Side -->
          <div class="col-md-6 login-left d-none d-md-block"></div>

          <!-- Right Form Side -->
          <div class="col-md-6 bg-white p-5">
            <div class="text-center mb-4">
              <h3><i class="fa-solid fa-user-lock me-2"></i>Login to Your Account</h3>
            </div>

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
</div>
@endsection
