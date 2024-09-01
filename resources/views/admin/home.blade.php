<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - RasoiGhar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 56px;
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-family: 'Lobster', cursive;
            font-size: 1.8rem;
            color: #ff6347;
            animation: fadeInLeft 2s;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-family: 'Lobster', cursive;
            color: #ff6347;
        }
        .btn-primary {
            background-color: #ff6347;
            border-color: #ff6347;
        }
        .btn-primary:hover {
            background-color: #e5533a;
            border-color: #e5533a;
        }
        @media (max-width: 767px) {
            .card {
                margin-bottom: 1rem;
            }
            .navbar-brand {
                font-size: 1.5rem;
            }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" style="color: #ff6347"; href="{{url('admin')}}">RasoiGhar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-bold"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="mb-4 text-center" style="font-family: 'Lobster', cursive; color: #800000; animation: fadeInLeft 2s; ">Welcome, Admin</h1>
        <p class="lead text-center" style="font-family: 'Lobster', cursive; color: #982B1C; animation: fadeInRight 2s;">Manage the recipes on RasoiGhar with the options below.</p>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Add Your New Recipes</h5>
                        <p class="card-text">Create and upload a new recipe to the website.</p>
                        <a href="{{url('add-recipe')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Add</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">View Your Recipes</h5>
                        <p class="card-text">Manage the recipes that have already been posted.</p>
                        <a href="{{url('view-receipe')}}" class="btn btn-primary"><i class="fa fa-eye"></i>View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Bootstrap and FontAwesome JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
