<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - AUFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Your Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container py-2 d-flex justify-content-between align-items-center">
            
            <!-- Left: Logo -->
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="#">
                <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 32px;">
            </a>


            <!-- Center: Nav links -->
            <ul class="navbar-nav gap-4 flex-row justify-content-center mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}" href="{{ route('user.dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('user.actionlist') ? 'active' : '' }}" href="{{ route('user.actionlist') }}">Action List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('forms.my') ? 'active' : '' }}" href="{{ route('forms.my') }}">My Forms</a>
                </li>
            </ul>


            <!-- Right: Profile -->
            <div class="dropdown">
                <a class="text-dark fw-medium dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown">
                    My Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- Page Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS (optional for future dropdowns or modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
