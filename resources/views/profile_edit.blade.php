<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }

        .form-control:focus {
            border-color: #6c5ce7;
            box-shadow: 0 0 0 0.2rem rgba(108, 92, 231, 0.25);
        }

        .avatar-preview {
            border-radius: 8px;
            max-height: 150px;
            object-fit: cover;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="card shadow-sm mx-auto" style="max-width: 650px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">
                    <i class="fas fa-user-edit me-2"></i>Edit Personal Information
                </h2>

                @if(session('success'))
                    <div class="alert alert-success text-center">
                        <i class="fas fa-check-circle me-1"></i>{{ session('success') }}
                    </div>
                @endif

                <form action="/profile/edit" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" name="username" id="username" value="{{ old('username', Auth::user()->username) }}" required>
                        @error('username') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email', Auth::user()->email) }}" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone', Auth::user()->phone) }}">
                        @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="file" class="form-control" name="avatar" id="avatar">
                        @if(Auth::user()->avatar)
                            <div class="mt-3">
                                <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" class="avatar-preview">
                            </div>
                        @endif
                        @error('avatar') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New password (Optional)</label>
                        <input type="password" class="form-control" name="password" id="password">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/profile" class="btn btn-outline-secondary">
                            <i class="fas fa-chevron-left me-1"></i>Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
