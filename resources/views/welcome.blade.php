<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WM | Portfolio</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Vite compiled assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body.light-theme {
            background-color: #ffffff;
            color: #000000;
        }

        body.dark-theme {
            background-color: #121212;
            color: #ffffff;
        }

        .navbar.light-theme {
            background-color: #f8f9fa !important;
        }

        .navbar.dark-theme {
            background-color: #1f1f1f !important;
        }

        .navbar.dark-theme .nav-link,
        .navbar.dark-theme .navbar-brand {
            color: #ffffff !important;
        }

        .navbar.light-theme .nav-link,
        .navbar.light-theme .navbar-brand {
            color: #000000 !important;
        }

        body,
        .navbar {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>

<body class="light-theme">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light light-theme">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/download.png') }}" alt="logo" width="50" height="50"
                    class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-3">
                    <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="/resume">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                </ul>
                <button id="themeToggle" class="btn btn-outline-secondary ms-3">🌙</button>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="row w-100 text-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column text-center">
                <h1 class="mb-3">HELLO. I'M WAMBUI MUGO.</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/image.png') }}" alt="software engineer" class="img-fluid rounded">
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Dark/Light Toggle Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleButton = document.getElementById('themeToggle');
            const body = document.body;
            const navbar = document.querySelector('.navbar');

            if (localStorage.getItem('theme') === 'dark') {
                body.classList.remove('light-theme');
                body.classList.add('dark-theme');
                navbar.classList.remove('light-theme');
                navbar.classList.add('dark-theme');
                toggleButton.textContent = '☀️ Light Mode';
            }

            toggleButton.addEventListener('click', () => {
                const isDark = body.classList.contains('dark-theme');
                body.classList.toggle('dark-theme', !isDark);
                body.classList.toggle('light-theme', isDark);
                navbar.classList.toggle('dark-theme', !isDark);
                navbar.classList.toggle('light-theme', isDark);
                toggleButton.textContent = isDark ? '🌙 Dark Mode' : '☀️ Light Mode';
                localStorage.setItem('theme', isDark ? 'light' : 'dark');
            });
        });
    </script>
</body>

</html>
