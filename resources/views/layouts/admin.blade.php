<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arena Grid | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #f0f7ff;
            color: #1e3a8a;
        }

        .sidebar {
            background-color: #ffffff;
            border-right: 1px solid #dbeafe;
        }

        .nav-link {
            color: #1e40af;
            transition: 0.2s;
        }

        .nav-link:hover {
            background-color: #eff6ff;
            color: #2563eb;
        }

        .btn-primary-blue {
            background-color: #3b82f6;
            color: white;
            transition: 0.3s;
        }

        .btn-primary-blue:hover {
            background-color: #2563eb;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .content-card {
            background-color: #ffffff;
            border: 1px solid #dbeafe;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen">
        <aside class="w-64 sidebar p-6">
            <h1 class="text-2xl font-bold text-blue-700 mb-8">E-RESERV 🌐</h1>
            <nav class="space-y-2">
                <a href="{{ route('admin') }}" class="block py-2 px-4 rounded nav-link font-medium">Stadiums</a>
                <a href="{{ route('reservations.index') }}" class="block py-2 px-4 rounded nav-link font-medium">Reservations</a>
                <a href="{{ route('fitur.index') }}" class="block py-2 px-4 rounded nav-link font-medium">Fitur</a>
            </nav>
        </aside>

        <main class="flex-1 p-10">
            @yield('content')
        </main>
    </div>
</body>

</html>