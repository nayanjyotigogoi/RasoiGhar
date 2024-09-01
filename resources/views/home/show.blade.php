<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }} - RasoiGhar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            line-height: 1.6;
        }
        .navbar-brand {
            font-family: 'Lobster', cursive;
            font-size: 1.8rem;
            color: #ff6347;
            animation: fadeInLeft 2s;
        }
        .nav-link {
            color: #343a40;
            font-weight: 600;
        }
        .nav-link:hover {
            color: #ff6347;
        }
        .recipe-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s;
            overflow: hidden;
            background-color: #fff;
        }
        .recipe-card .row {
            align-items: center;
        }
        .card-img-right {
            border-radius: 15px;
            max-height: 400px;
            object-fit: cover;
            width: 100%;
        }
        .card-body {
            padding: 2rem;
        }
        .card-title {
            font-family: 'Lobster', cursive;
            color: #ff6347;
            margin-bottom: 1rem;
        }
        .card-text {
            color: #6c757d;
        }
        h5 {
            color: #343a40;
            margin-top: 1.5rem;
        }
        ul, ol {
            padding-left: 1.5rem;
            color: #6c757d;
        }
        .btn-primary {
            background-color: #ff6347;
            border-color: #ff6347;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #ff4500;
            border-color: #ff4500;
        }
        .footer {
            background-color: #343a40;
            color: white;
        }
        @media (max-width: 576px) {
            .card-body {
                padding: 1.5rem;
            }
            .card-title {
                font-size: 1.5rem;
            }
            h5 {
                font-size: 1.2rem;
            }
            .card-img-right {
                max-height: 300px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">RasoiGhar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('home-recipe')}}">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Recipe Card -->
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card recipe-card">
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <img src="{{ asset('storage/' . $recipe->image) }}" class="card-img-right" alt="{{ $recipe->title }}">
                        </div>
                        <div class="col-md-5">
                            <div class="card-body">
                                <h2 class="card-title">{{ $recipe->title }}</h2>
                                <p class="card-text">{{ $recipe->description }}</p>

                                <h5>Ingredients</h5>
                                @if(count($ingredients) > 0)
                                <ul>
                                    @foreach($ingredients as $ingredient)
                                        <li>{{ $ingredient }}</li>
                                    @endforeach
                                </ul>
                                @else
                                    <p>No ingredients available.</p>
                                @endif

                                <h5>Instructions</h5>
                                @if(count($instructions) > 0)
                                <ol>
                                    @foreach($instructions as $instruction)
                                        <li>{{ $instruction }}</li>
                                    @endforeach
                                </ol>
                                @else
                                    <p>No instructions available.</p>
                                @endif

                                <a href="{{ url('/home-recipe') }}" class="btn btn-primary mt-4"><i class="fa fa-reply"></i> Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-3 text-center">
        <div class="container">
            <p>&copy; 2024 RasoiGhar. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
