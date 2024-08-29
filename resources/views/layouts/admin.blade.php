<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TaleOfYum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="d-flex" id="wrapper">


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">TaleOfYum Admin</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a href="{{ url('admin') }}" class="list-group-item list-group-item-action bg-transparent text-black fw-bold"><i class="fas fa-tachometer-alt"></i>Dashboard <br></a>
                    </li>
                    <li class="nav-item">
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-black fw-bold"><i class="fas fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Admin Dashboard</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("menu-toggle").onclick = function() {
            document.getElementById("wrapper").classList.toggle("toggled");
        };
    </script>
</body>
</html>
