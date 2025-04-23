<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
            color: white;
            padding: 60px 0;
            text-align: center;
            position: relative;
        }
        .section-title {
            color: #343a40;
        }
        .info-box {
            background-color: #f8f9fa;
            border-left: 5px solid #6610f2;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
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

  <header class="hero-section">
    <div class="container">
      <h1 class="display-4 fw-bold">About Our Student Management System</h1>
      <p class="lead">Empowering education through technology and simplicity</p>
    </div>
  </header>

  <main class="container py-5">
    <div class="text-center mb-5">
      <h2 class="section-title">Why Choose Our Platform?</h2>
      <p class="text-muted">We designed our system to make student data management seamless, insightful, and accessible to everyone in education.</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6">
        <div class="info-box">
          <h4>Comprehensive Student Profiles</h4>
          <p>Maintain detailed student records including personal info, academic achievements, attendance, and more.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box">
          <h4>Track Academic Progress</h4>
          <p>View real-time progress reports, grades, and performance analytics to help students and instructors stay on the same page.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box">
          <h4>Class & Subject Management</h4>
          <p>Assign students to classes, manage timetables, and organize subjects effortlessly with intuitive tools.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box">
          <h4>Boost Communication</h4>
          <p>Enable smooth communication between students, teachers, and administrators through built-in notifications and messaging.</p>
        </div>
      </div>
    </div>
  </main>

  <footer class="bg-secondary text-white text-center py-4 mt-auto">
    <div class="container">
      <p class="mb-0">&copy; 2025 Student Management System. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
