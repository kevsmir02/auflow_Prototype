<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - AUFlow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

    <div class="card shadow-sm rounded-4 p-4" style="max-width: 420px; width: 100%;">
        
        <!-- Branding -->
        <div class="text-center mb-4">
            <img src="{{ asset('images/auflog.png') }}" alt="AUFlow Logo" style="height: 60px;">
            <h5 class="fw-bold mt-3 mb-0">Welcome to <span class="text-primary">AUFlow</span></h5>
            <p class="text-muted small">Login to your account to continue</p>
        </div>

        <!-- Error Alert -->
        @if (session('error'))
            <div class="alert alert-danger small">{{ session('error') }}</div>
        @endif

        <!-- Login Form -->
        <form method="GET" action="{{ route('simulate.login') }}">
            <div class="mb-3">
                <label for="role" class="form-label small fw-semibold">Username</label>
                <input
                    type="text"
                    name="role"
                    id="role"
                    class="form-control form-control-sm"
                    placeholder="Enter 'admin' or 'user'"
                    required
                >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label small fw-semibold">Password</label>
                <input
                    type="password"
                    id="password"
                    class="form-control form-control-sm"
                    placeholder="(not required)"
                >
            </div>

            <div class="mb-3 text-end">
                <a href="#" class="small text-muted text-decoration-none">Forgot Password?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 btn-sm">Login</button>
        </form>

        <!-- Footer -->
        <p class="text-center small mt-4 mb-0">
            Don’t have an account?
            <a href="#" class="text-decoration-none">Sign Up</a>
        </p>
    </div>

</body>
</html>
