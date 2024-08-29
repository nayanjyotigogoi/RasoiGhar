<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }} - RasoiGhar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

     <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #ff6347; animation: fadeInLeft 2s;">RasoiGhar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="animation: fadeInRight 2s;">
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card recipe-card" style="border: none; border-radius: 15px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); animation: fadeIn 1s;">
                    <img src="{{ asset('images/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->title }}" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                    <div class="card-body">
                        <h2 class="card-title" style="font-family: 'Lobster', cursive; color: #ff6347;">{{ $recipe->title }}</h2>
                        <p class="card-text" style="font-family: 'Nunito', sans-serif; color: #6c757d;">{{ $recipe->description }}</p>

                        <h5 style="font-family: 'Nunito', sans-serif; color: #343a40;">Ingredients</h5>
                        @if(count($ingredients) > 0)
                        <ul style="font-family: 'Nunito', sans-serif; color: #6c757d;">
                            @foreach($ingredients as $ingredient)
                                <li>{{ $ingredient }}</li>
                            @endforeach
                        </ul>
                        @else
                            <p>No ingredients available.</p>
                        @endif

                        <h5 style="font-family: 'Nunito', sans-serif; color: #343a40;">Instructions</h5>
                        @if(count($instructions) > 0)
                        <ol style="font-family: 'Nunito', sans-serif; color: #6c757d;">
                            @foreach($instructions as $instruction)
                                <li>{{ $instruction }}</li>
                            @endforeach
                        </ol>
                        @else
                            <p>No instructions available.</p>
                        @endif

                        <a href="{{ url('/home-recipe') }}" class="btn btn-primary mt-4" style="background-color: #ff6347; color: white;">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Footer -->
     <footer class="footer py-3 text-center" style="background-color: #343a40; color: white;">
        <div class="container">
            <p>&copy; 2024 RasoiGhar. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
