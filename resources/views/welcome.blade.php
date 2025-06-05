<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>WM | Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .navbar.dark-theme {
            background-color: #1f1f1f;
            color: #ffffff;
        }
        .navbar.dark-theme .nav-link {
            color: #ffffff;
        }
        .navbar.light-theme .nav-link {
            color: #000000;
        }
        body, .navbar {
            transition: background-color 0.3s ease, color 0.3s ease;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light light-theme">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="{{asset('images/download.png')}}" alt="logo" width = "50" height = "50" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a  class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/resume">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <button id="themeToggle" class="btn btn-outline-secondary ms-3">
                🌙 Dark Mode
            </button>
        </div>
    </div>
</nav>
<div class="d-flex justify-content-center align-items-center vh-100">
<div class="row w-100 text-center">
    <div class="col-md-6 d-flex justify-content-center align-items-center flex-column text-center">
      HELLO. I'M WAMBUI MUGO.
    </div>
    <div class="col-md-6 d-flex justify-content-center align-items-center">
      <img src="{{asset('images/image.png')}}" alt="software engineer" class="img-fluid rounded">
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
