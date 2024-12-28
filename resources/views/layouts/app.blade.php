<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FTTH KampoengIT')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
        }
        .navbar {
            background-color: #1f1f1f;
        }
        .navbar-brand, .btn-primary, a {
            color: #ffffff !important;
        }
        a:hover {
            color: #cccccc !important;
        }
        .table {
            color: #e0e0e0;
            background-color: #1e1e1e;
        }
        .table th, .table td {
            border-color: #333333;
        }
        .table-hover tbody tr:hover {
            background-color: #333333;
        }
        .btn-primary {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
        }
        .btn-primary:hover {
            background-color: #2563eb;
            border-color: #2563eb;
        }
        .btn-danger {
            background-color: #b91c1c;
            border-color: #b91c1c;
        }
        .btn-warning {
            background-color: #d97706;
            border-color: #d97706;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container  d-flex justify-content-between">
       
            <a class="navbar-brand" href="#">FTTH Kampoeng IT</a>
            @if (Route::currentRouteName() == 'ftth.show')
                <div>
                    <a href="{{ route('ftth.index') }}" class="btn btn-outline-light">Kembali ke Index</a>
                </div>
            @endif
            @if (Route::currentRouteName() == 'ftth.index')
            <div class="d-flex">
                <a href="{{ route('ftth.index') }}" class="btn btn-outline-light me-2">User</a>
                <a href="{{ route('fat.index') }}" class="btn btn-outline-light">Fat</a>
            </div>
            @endif

            @if (Route::currentRouteName() == 'fat.index')
            <div class="d-flex">
                <a href="{{ route('ftth.index') }}" class="btn btn-outline-light me-2">User</a>
                <a href="{{ route('fat.index') }}" class="btn btn-outline-light">Fat</a>
            </div>
            @endif
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
