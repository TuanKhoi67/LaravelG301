@extends('layouts.app')

@section('title', 'Home - Student Management')

@push('styles')
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main, .container.py-5 {
            flex: 1;
        }
        main .container {
    animation: fadeInUp 1s ease-in;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
        .hero {
            background-image: url('https://images.unsplash.com/photo-1603575448361-cd907dc21215');
            background-size: cover;
            background-position: center;
            height: 300px;
            position: relative;
            animation: zoomIn 10s ease-in-out infinite alternate;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }

            100% {
                transform: scale(1.1);
                opacity: 1;
            }
        }

        .login-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            animation: slideDown 1s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .carousel-item img {
            object-fit: cover;
            height: 400px;
        }
    </style>
@endpush

@section('content')
<body>

    <div id="studentCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1596495577886-d920f1fb7238" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#studentCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">go back</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#studentCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">go to forward</span>
        </button>
    </div>

    <main>
        <div class="container py-5">
            <h2 class="mb-4 text-center">Welcome to the system</h2>
            <p class="text-center">Manage student information easily and efficiently.</p>
            <div class="text-center mt-4">
                <a href="/students" class="btn btn-primary px-4 py-2">Start managing students</a>
            </div>
        </div>

    </main>

    <script>
        function handleLogin() {
            alert("Chuyển đến trang đăng nhập...");
            // window.location.href = "/login";
        }
    </script>
</body>

@endsection
