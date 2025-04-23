<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Personal page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f8;
        }

        .card {
            border-radius: 1.25rem;
        }

        .card-header {
            border-top-left-radius: 1.25rem;
            border-top-right-radius: 1.25rem;
        }

        .list-group-item {
            font-size: 1rem;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
        <a class="navbar-brand" href="/">Student Management</a>
        <div class="ms-auto">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-light" type="submit">
                    <i class="fas fa-sign-out-alt me-1"></i>Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg rounded-4">
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h3 class="mb-0"><i class="fas fa-user-circle me-2"></i>Personal Information</h3>
                    </div>

                    <div class="card-body">
                        <div class="text-center mb-4">
                            @if(Auth::user()->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" width="150">
                            @else
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar"
                            class="rounded-circle shadow border border-3 border-white"
                            width="150" height="150">
                            @endif
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Username:</strong> {{ Auth::user()->username }}</li>
                            <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
                            <li class="list-group-item"><strong>Phone number:</strong> {{ Auth::user()->phone ?? 'Chưa có' }}</li>
                            <li class="list-group-item"><strong>Date created:</strong> {{ Auth::user()->created_at->format('d/m/Y') }}</li>
                        </ul>

                        <div class="text-center mt-4">
                            <a href="/profile/edit" class="btn btn-success px-4">Update profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-secondary text-white text-center py-3">
        <div class="container">
          <p class="mb-0">&copy; 2025 Student Management System. All rights reserved.</p>
        </div>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
