<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-warning-70">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand text-light"  href="/Home">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Logo" width="50" height="50" class="me-2">
                <strong>PT . Beast On Our Mind</strong>
            </a>

            <button type="button" class="navbar-toggler bg-danger" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="/Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="/Jabatan/index">Jabatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="/Karyawan/index">Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="/Gaji/index">Gaji</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fs-5" aria-current="page" href="/Laporan/index">Laporan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="div container">
        <div class="row-m4">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>