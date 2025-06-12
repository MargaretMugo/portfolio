<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WM | Portfolio</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .navbar-toggler {
            background-color: white;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-sky-300 via-blue-600 to-indigo-900">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-light text-dark shadow py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/download.png') }}" alt="logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- Main Content --}}
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="row w-100 text-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column text-white">
                <h1 class="mb-3">HELLO. I'M WAMBUI MUGO.</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/image.png') }}" alt="software engineer" class="img-fluid rounded">
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Theme Toggle --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('themeToggle');
            const body = document.body;
            const navbar = document.querySelector('.navbar');

            if (localStorage.getItem('theme') === 'dark') {
                body.classList.add('dark-theme');
                toggleButton.textContent = '☀️ Light Mode';
            }

            toggleButton.addEventListener('click', () => {
                const isDark = body.classList.contains('dark-theme');
                body.classList.toggle('dark-theme', !isDark);
                toggleButton.textContent = isDark ? '🌙 Dark Mode' : '☀️ Light Mode';
                localStorage.setItem('theme', isDark ? 'light' : 'dark');
            });
        });
    </script>
</body>

</html>
