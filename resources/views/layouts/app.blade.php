<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - AUFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light text-dark">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container d-flex justify-content-between align-items-center py-2">

            <!-- Logo -->
            <a href="#" class="navbar-brand d-flex align-items-center gap-2 text-primary fw-bold text-decoration-none">
                <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 56px;">
            </a>

            <!-- Navigation Links -->
            @php
                $role = session('role');
                $homeRoute = $role === 'admin' ? route('admin.dashboard') : route('user.dashboard');
            @endphp

            <ul class="navbar-nav flex-row gap-3 mx-auto">
                <li class="nav-item">
                    <a href="{{ $homeRoute }}" class="nav-link {{ request()->routeIs('*.dashboard') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('action.list') }}" class="nav-link {{ request()->routeIs('action.list') ? 'active fw-semibold' : '' }}">
                        Action List
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('forms.my') }}" class="nav-link {{ request()->routeIs('forms.my') ? 'active fw-semibold' : '' }}">
                        My Forms
                    </a>
                </li>
            </ul>

            <!-- Profile Menu -->
            <div class="dropdown">
                <a href="#" class="dropdown-toggle text-dark fw-medium text-decoration-none" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    My Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a href="#" class="dropdown-item">Settings</a></li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Main Page Content -->
    <main class="container-fluid py-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
