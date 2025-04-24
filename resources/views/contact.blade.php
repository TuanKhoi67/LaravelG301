@extends('layouts.app')

@section('title', 'Contact - Student Management')

@push('styles')
  <style>
    .hero-section {
        background: linear-gradient(135deg, #007bff 0%, #6610f2 100%);
        color: white;
        padding: 60px 0;
        text-align: center;
        position: relative;
    }

</style>
@endpush

@section('content')

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
