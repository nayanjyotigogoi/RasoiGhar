<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Recipes - RasoiGhar</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px; /* Adjust for fixed navbar */
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-family: 'Lobster', cursive;
            font-size: 1.8rem;
            color: #ff6347;
            animation: fadeIn 2s;
        }

        .navbar-nav .nav-link {
            color: #333;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff6347;
        }

        .card-container {
            margin-top: 20px;
        }

        .card {
            margin-bottom: 20px;
            animation: slideUp 0.6s ease-out;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card img {
            object-fit: cover;
            max-height: 200px;
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.05);
        }

        .btn-sm {
            font-size: 0.875rem;
        }

        @media (max-width: 767.98px) {
            .navbar-brand {
                font-size: 1.5rem;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #ff6347; animation: fadeInLeft 2s;" href="{{ url('admin') }}">RasoiGhar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container mt-5 card-container">
        <a href="{{ url('/admin') }}" class="btn btn-primary mb-4"><i class="fa fa-reply"></i>Back</a>
        <h1 class="mb-4" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #800000; animation: fadeIn 2s;">Recipes</h1>
        <div class="row">
            @foreach($recipes as $recipe)
            <div class="col-md-4">
                <div class="card">
                    @if($recipe->image)
                    <img src="{{ asset('storage/' . $recipe->image) }}" class="card-img-top" alt="{{ $recipe->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ingredients</h6>
                        @if(is_array($recipe->ingredients) && !empty($recipe->ingredients))
                        <ol>
                            @foreach($recipe->ingredients as $ingredient)
                            <li>{{ $ingredient }}</li>
                            @endforeach
                        </ol>
                        @else
                        <p>No ingredients available.</p>
                        @endif

                        <h6 class="card-subtitle mb-2 text-muted">Instructions</h6>
                        @if(is_array($recipe->instructions) && !empty($recipe->instructions))
                        <ol>
                            @foreach($recipe->instructions as $instruction)
                            <li>{{ $instruction }}</li>
                            @endforeach
                        </ol>
                        @else
                        <p>No instructions available.</p>
                        @endif

                        <div class="mt-3">
                            <a href="{{ url('edit-recipes', $recipe->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-pen"></i>Edit</a>
                            <a href="{{ url('delete-recipe', $recipe->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
