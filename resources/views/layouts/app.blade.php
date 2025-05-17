<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Férias')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .header {
            height: 60px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
            padding: 0 20px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .wrapper {
            display: flex;
            height: calc(100vh - 60px);
            margin-top: 60px;
            transition: all 0.3s ease;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            transition: all 0.3s ease;
            overflow-y: auto;
            flex-shrink: 0;
        }

        .sidebar.collapsed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .sidebar a {
            color: white;
            padding: 15px;
            display: block;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content-wrapper {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #f5f5f5;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: absolute;
                z-index: 999;
                height: calc(100vh - 60px);
                top: 60px;
                left: 0;
            }

            .sidebar.collapsed {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<div class="header">
    <button id="menuToggle" class="btn btn-outline-secondary me-3">☰</button>
    <h5 class="mb-0">@yield('title', 'Sistema de Férias')</h5>
</div>

<!-- Main Layout -->
<div class="wrapper">
    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        @include('partials.sidebar')
    </div>

    <!-- Content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggleButton = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });
</script>
</body>
</html>
