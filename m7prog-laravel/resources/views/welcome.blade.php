<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('welcome') ? 'text-white' : 'text-dark' }}"
                            href="{{ route('welcome') }}">Home</a>
                    </li>
                    <a class="nav-link {{ request()->routeIs('mainpage') ? 'text-white' : 'text-dark' }}"
                            href="{{ route('mainpage') }}">Main</a>
                    </li>
                    <a class="nav-link {{ request()->routeIs('about') ? 'text-white' : 'text-dark' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="text-center py-5 bg-secondary">
        <div class="container">
            <h1 class="display-4">Welcome to Our Website</h1>
            <p class="lead">A modern and responsive homepage layout</p>
            <a href="#" class="btn btn-primary">Get Started</a>
        </div>
    </header>

    <section class="container py-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card bg-dark text-white border-secondary p-4">
                    <h3>Feature 1</h3>
                    <p>Some quick example text to describe the feature.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white border-secondary p-4">
                    <h3>Feature 2</h3>
                    <p>Some quick example text to describe the feature.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white border-secondary p-4">
                    <h3>Feature 3</h3>
                    <p>Some quick example text to describe the feature.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4 bg-black">
        <p class="mb-0">&copy; 2025 Your Brand. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>