<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Logo / Trang chủ -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" width="30"
                    height="30" class="me-2">
                Quản Lý SV
            </a>

            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Nút điều hướng -->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#classes">Lớp học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Trang cá nhân</a>
                    </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Quản lý
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li><a class="dropdown-item" href="#students">Sinh viên</a></li>
                            <li><a class="dropdown-item" href="#subjects">Giáo viên</a></li>
                            <li><a class="dropdown-item" href="#subjects">Môn học</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Nút đăng nhập -->
                <form class="d-flex">
                    <button class="btn btn-outline-light" type="button" onclick="handleLogin()">Đăng nhập</button>
                </form>
            </div>
        </div>
    </nav>

    <script>
        function handleLogin() {
            alert("Chuyển đến trang đăng nhập...");
            // window.location.href = "/login";
        }
    </script>

    <!-- Carousel hình ảnh mượt -->
    <div id="studentCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc" class="d-block w-100"
                    alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1596495577886-d920f1fb7238" class="d-block w-100"
                    alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f" class="d-block w-100"
                    alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1522199794611-8e5e5a0177a3" class="d-block w-100"
                    alt="Slide 4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#studentCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Trước</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#studentCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Tiếp</span>
        </button>
    </div>

    <!-- Nội dung chính -->
    <div class="container py-5">
        <h2 class="mb-4 text-center">Chào mừng đến với hệ thống</h2>
        <p class="text-center">Quản lý thông tin sinh viên một cách dễ dàng và hiệu quả.</p>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2025 Hệ thống quản lý sinh viên. Mọi quyền được bảo lưu.
    </footer>

    <script>
        function handleLogin() {
            alert("Chuyển đến trang đăng nhập...");
            // window.location.href = "/login";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
