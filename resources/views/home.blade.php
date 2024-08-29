<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaleOfYum - Welcome</title>
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
            <a class="navbar-brand" href="/" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #ff6347; animation: fadeInLeft 2s;">TaleOfYum</a>
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

    <!-- Hero Section -->
    <header class="hero-section text-center text-white d-flex justify-content-center align-items-center" style="height: 100vh; background: url('\public\images\home_image_bg.jpg') center center no-repeat; background-size: cover; animation: fadeIn 2s;">
        <div class="container">
            <h1 class="display-4" style="font-family: 'Lobster', cursive; font-size: 4rem; color: #fff; animation: fadeInDown 2s;">Welcome to TaleOfYum</h1>
            <p class="lead" style="font-family: 'Nunito', sans-serif; font-size: 1.5rem; animation: fadeInUp 2s; color: #ffd700;">Discover delicious recipes that will make your taste buds dance!</p>
            <a href="#recipes" class="btn btn-lg mt-3" style="background-color: #ff6347; color: white; animation: pulse 2s infinite;">Explore Recipes</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section py-5 text-center" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 style="font-family: 'Lobster', cursive; color: #ff6347; animation: fadeInLeft 2s;">About TaleOfYum</h2>
            <p class="lead" style="font-family: 'Nunito', sans-serif; color: #6c757d; animation: fadeInUp 2s;">TaleOfYum is your go-to destination for discovering mouth-watering recipes that are easy to cook and delightful to taste. Join our community of food lovers!</p>
        </div>
    </section>

    {{-- Recipe Highlights
    <section id="recipes" class="recipe-highlights py-5">
        <div class="container">
            <h2 class="text-center mb-5" style="font-family: 'Lobster', cursive; color: #ff6347; animation: fadeIn 2s;">Featured Recipes</h2>
            <div class="row">
                <!-- Recipe Card -->
                <div class="col-lg-4 col-md-6 mb-4" style="animation: zoomIn 2s;">
                    <div class="card recipe-card" style="border: none; border-radius: 15px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); transition: transform 0.3s, box-shadow 0.3s;">
                        <img src="{{ asset('/public/images/home_image_bg.jpg') }}" class="card-img-top" alt="Recipe" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                         <div class="card-body">
                            <h5 class="card-title" style="font-family: 'Nunito', sans-serif; color: #ff6347;">Delicious Dish</h5>
                            <p class="card-text" style="font-family: 'Nunito', sans-serif; color: #6c757d;">A delightful blend of flavors that will leave you craving for more.</p>
                            <a href="{{url('home-recipe')}}" class="btn btn-outline-primary" style="border-color: #ff6347; color: #ff6347;">View Recipe</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-3 text-center" style="background-color: #343a40; color: white; animation: fadeInUp 2s;">
        <div class="container">
            <p>&copy; 2024 TaleOfYum. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
