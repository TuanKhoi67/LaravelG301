<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Add Student</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="/"><i class="fas fa-user-graduate me-2"></i>Student Management</a>
  </nav>

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

  <footer class="bg-secondary text-white text-center py-3 mt-5">
    <div class="container">
      <p class="mb-0">&copy; 2025 Student Management System. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
