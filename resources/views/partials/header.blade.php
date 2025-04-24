<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="https://img.favpng.com/21/2/8/management-system-higher-education-logo-png-favpng-BMVWMc3Db4zN7DfdhEw4vF0Cm.jpg" width="30" height="30" class="me-2">
        Student Management System
    </a>
    <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="/classes">Class</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Manager</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/students">Student</a></li>
                    <li><a class="dropdown-item" href="/subjects">Course</a></li>
                </ul>
            </li>
        </ul>

        @auth
        <div class="dropdown">
            <a class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" href="#" id="userDropdown" data-bs-toggle="dropdown">
                @if(Auth::user()->avatar)
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="avatar" width="32" height="32" class="rounded-circle me-2">
                @else
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="32" height="32" class="rounded-circle me-2">
                @endif
                {{ Auth::user()->username }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="/profile">Personal page</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
        @endauth
    </div>
</nav>
