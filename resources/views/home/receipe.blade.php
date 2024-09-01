<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Recipes - RasoiGhar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 80px; /* Adjust for navbar height */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        .row {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        .fade-in {
            animation: fadeIn 2s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .recipe-highlights {
            flex: 1;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 15px 0;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #ff6347;">RasoiGhar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recipes">Recipes</a>
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

    <!-- Recipes Section -->
    <section id="recipes" class="recipe-highlights py-5">
        <div class="container">
            <h2 class="text-center mb-5 fade-in" style="font-family: 'Lobster', cursive; color: #ff6347;">All Recipes</h2>
            <div class="row">
                <!-- Recipe Card -->
                @foreach($recipes as $recipe)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card recipe-card fade-in" style="border: none; border-radius: 15px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                            
                            <div class="card-body" >
                                <h5 class="card-title" style="font-family:  'Nunito', sans-serif; color: #ff6347;
            display: flex;
            align-items: center;
            justify-content: center;">{{ $recipe->title }}</h5>
                                <p class="card-text" style="font-family: 'Nunito', sans-serif; color: #6c757d;">{{ $recipe->description }}</p>
                                <a href="{{ url('recipe-show', $recipe->id) }}" class="btn btn-outline-primary" style="border-color: #ff6347; color: #ff6347;  flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;"><i class="fa fa-eye"></i>View Recipe</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p>&copy; 2024 RasoiGhar. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
