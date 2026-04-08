<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel12</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #dbeafe, #f0f9ff);
            margin: 0;
        }

        .navbar {
            background: rgba(255,255,255,0.7);
            backdrop-filter: blur(10px);
            border-radius: 0 0 20px 20px;
            padding: 15px;
        }

        .nav-link {
            color: #2563eb !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #1e40af !important;
        }

        .card-custom {
            background: rgba(255,255,255,0.8);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }

        .btn-soft {
            background: #60a5fa;
            color: white;
            border-radius: 20px;
            padding: 8px 20px;
            transition: 0.3s;
            border: none;
        }

        .btn-soft:hover {
            background: #3b82f6;
        }

        .hero {
            padding: 100px 20px;
            text-align: center;
        }

        .title {
            font-size: 45px;
            font-weight: 600;
            color: #1e3a8a;
        }

        .subtitle {
            color: #475569;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar d-flex justify-content-between px-4">
    <h4 class="text-primary m-0">E-Reserv⚽</h4>

    <div>
        <a href="/" class="nav-link d-inline">Home</a>
        <a href="/about" class="nav-link d-inline">About</a>
        <a href="/fitur" class="nav-link d-inline">Fitur</a>
        <a href="/contact" class="nav-link d-inline">Contact</a>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    @yield('content')   <!-- INI YANG BIKIN ISI MUNCUL -->
</div>

</body>
</html>
