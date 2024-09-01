<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RasoiGhar - Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        .hero-section {
        background-image: url('/public/images/home_image_bg.jpg');
        }
        .hero-section {
            background-size: cover;
            color: #fff;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .card {
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #ff6347;
            border-color: #ff6347;
        }
        .btn-primary:hover {
            background-color: #ff4500;
            border-color: #ff4500;
        }
        .footer {
            background-color: #343a40;
        }
        .footer a {
            color: #ffd700;
        }
        .footer a:hover {
            color: #fff;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
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

    <!-- Hero Section -->
    <header class="hero-section text-center d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container" >
            <h1 class="display-4" style="font-family: 'Lobster', cursive; color: #800000; font-size: 4rem; animation: fadeInDown 2s;">Welcome to RasoiGhar</h1>
            <p class="lead" style="font-family: 'Nunito', sans-serif; font-size: 1.5rem; color: #982B1C; animation: fadeInUp 2s;">Discover delicious recipes that will make your taste buds dance!</p>
            <a href="{{url('home-recipe')}}" class="btn btn-primary btn-lg mt-3" style="animation: pulse 2s infinite;">Explore Recipes</a>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section py-5 text-center" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 style="font-family: 'Lobster', cursive; color: #ff6347; animation: fadeInLeft 2s;">About RasoiGhar</h2>
            <p class="lead" style="font-family: 'Nunito', sans-serif; color: #6c757d; animation: fadeInUp 2s;">RasoiGhar is your go-to destination for discovering mouth-watering recipes that are easy to cook and delightful to taste. Join our community of food lovers!</p>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer py-3 text-center" style="background-color: #343a40; color: white; animation: fadeInUp 2s">
        <div class="container">
            <p>&copy; 2024 RasoiGhar. All rights reserved.</p>
            <a href="{{url('Show-login')}}">Admin Login</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
