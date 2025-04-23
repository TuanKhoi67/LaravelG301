<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register - Student Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #74ebd5, #acb6e5);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>
    
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-success text-white text-center rounded-top-4 py-4">
          <h3 class="mb-0"><i class="fas fa-user-plus me-2"></i>Register</h3>
        </div>
        <div class="card-body p-4">

          {{-- Error Message --}}
          @if($errors->any())
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ url('/register') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label"><i class="fas fa-user me-1"></i> User Name</label>
              <input type="text" name="username" class="form-control" placeholder="Enter your name" value="{{ old('username') }}" required>
            </div>
            <div class="mb-3">
              <label class="form-label"><i class="fas fa-envelope me-1"></i> Email</label>
              <input type="email" name="email" class="form-control" placeholder="name@example.com" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
              <label class="form-label"><i class="fas fa-lock me-1"></i> Password</label>
              <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>
            <div class="mb-3">
              <label class="form-label"><i class="fas fa-phone me-1"></i> Phone Number</label>
              <input type="text" name="phone" class="form-control" placeholder="0123456789" value="{{ old('phone') }}">
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success"><i class="fas fa-check-circle me-1"></i> Register</button>
            </div>
          </form>

          <div class="mt-4 text-center">
            <small>Already have an account? <a href="{{ url('/login') }}">Login here</a></small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
