<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header class="p-3 text-bg-primary">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 justify-content-center">
            <li><a href="#" class="nav-link px-2 text-white">Incio</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Quem Somos</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Contato</a></li>
            </ul>

            <form class="col-12 justify-content-center mb-3" role="search">
            <input type="search" class="form-control form-control- text-bg-white" placeholder="Buscar..." aria-label="Search">
            </form>

            <div class="text-end col-12">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
            <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
        </div>
    </header>
    <div class="container">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>