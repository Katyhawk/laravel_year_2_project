<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escapekeet</title>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/escaperooms.css">
    <link href="css/index.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-md bg-primary">
        <a href="index" class="navbar-brand mb-0 mx-1 h3 text-light ps-2 w-70">ROCMN</a>
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler bg-light text-primary me-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="d-flex align-items-center justify-content-center collapse navbar-collapse me-4 w-20" id="navbarNav">
            <div class="ms-auto">
                <ul class="navbar-nav">
                    <li class="nav-item me-5 fs-5">
                        <a href="/index" class="nav-link active text-light">Home</a>
                    </li>
                    <li class="nav-item me-5 fs-5">
                        <a href="/escaperooms" class="nav-link active text-light">
                            Escapegames
                        </a>
                    </li>
                    <li class="nav-item me-5 fs-5">
                        <a href="/contact" class="nav-link active text-light">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item me-5 fs-4">
                        <a href="/booking" class="nav-link text-light ">
                            <button type="button" class="btn btn-success btn-lg">Boek nu</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container flex-grow-1">
        @yield('content')
    </div>
    <footer class="mt-auto text-center py-3">
        <p class="mb-0">text</p>
        <p class="mb-0">Escape Room reservesystem</p>
    </footer>
</body>

</html>