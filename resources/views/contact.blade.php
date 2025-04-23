<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact - Student Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .hero-section {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
        color: white;
        padding: 60px 0;
        text-align: center;
        position: relative;
    }

</style>
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="https://img.favpng.com/21/2/8/management-system-higher-education-logo-png-favpng-BMVWMc3Db4zN7DfdhEw4vF0Cm.jpg" alt="Logo" width="30" height="30" class="me-2">
        Student Management System
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/classes">Class</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manager
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
              <li><a class="dropdown-item" href="/students">Student</a></li>
              <li><a class="dropdown-item" href="/subjects">Course</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="hero-section">
    <div class="container">
      <h1 class="display-4">Contact Us</h1>
      <p class="lead">We'd love to hear from you!</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8">

        @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        <div class="card shadow-lg">
          <div class="card-header bg-primary text-white">
            <h4><i class="fa-solid fa-envelope me-2"></i>Send us a message</h4>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('contact.send') }}">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Your name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="you@example.com">
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" id="message" rows="5" class="form-control" required placeholder="Your message..."></textarea>
              </div>
              <div class="d-grid">
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-paper-plane me-1"></i>Send Message</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Extra Contact Info -->
        <div class="mt-5 text-center">
          <h5 class="mb-3">Or reach us via:</h5>
          <p><i class="fa-solid fa-phone me-2"></i>+1 (800) 123-4567</p>
          <p><i class="fa-solid fa-envelope me-2"></i>support@studentmgmt.com</p>
          <p><i class="fa-solid fa-location-dot me-2"></i>123 School St, Education City</p>
        </div>

        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif

      </div>
    </div>
  </main>


  <!-- Footer -->
  <footer class="bg-dark text-white py-3 text-center">
    <div class="container">
      <small>&copy; 2025 Student Management System. All rights reserved.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
