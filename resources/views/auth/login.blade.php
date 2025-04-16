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
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
            <h3 class="text-center mb-4">Welcome</h3>

            <!-- Error message (optional) -->
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="GET" action="{{ route('simulate.login') }}">
                <input type="text" name="role" class="form-control mb-3" placeholder="Enter 'admin' or 'user'" required>
                <input type="password" class="form-control mb-2" placeholder="Password (ignored)">
                <div class="text-start mb-3">
                    <a href="#" class="text-muted" style="font-size: 0.9rem;">Forgot Password</a>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3">Login</button>
                <p class="text-center" style="font-size: 0.9rem;">Don't have an account? <a href="#">SignUp</a></p>
            </form>
        </div>
    </div>
</body>
</html>
