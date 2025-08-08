<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap & Chart.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --primary: #00A9F6;
            --primary-light: #07BEFC;
            --primary-lighter: #87E8FF;
            --background: #EAFFFF;
        }
        body {
            background-color: var(--background);
            font-family: 'Segoe UI', sans-serif;
        }
        .bg-primary-custom {
            background-color: var(--primary) !important;
            color: white;
        }
        .text-primary-custom {
            color: var(--primary);
        }
        .sidebar {
            min-height: 100vh;
            background-color: #FFFFFF;
            border-right: 1px solid #ccc;
        }
        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: #333;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: var(--primary-lighter);
            color: var(--primary);
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar p-3">
        <h5 class="text-primary-custom mb-4">SMK Dashboard</h5>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="#">Siswa</a>
        <a href="#">Guru</a>
        <a href="{{ route('slider.index') }}">Slider</a>
        <a href="#">Ekstrakurikuler</a>
        <a href="#">Berita</a>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="text-primary-custom">@yield('title')</h2>
            <span class="text-muted">Admin SMK</span>
        </div>

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
