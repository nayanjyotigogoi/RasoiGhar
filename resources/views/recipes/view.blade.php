<!-- resources/views/recipes/view.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">All Recipes</h1>
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
                        <a class="nav-link" href="/admin">Home</a>
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

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Instructions</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipes as $recipe)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $recipe->title }}</td>
                    
                    <!-- Display Ingredients as a List -->
                    <td>
                        @if(is_array($recipe->ingredients) && !empty($recipe->ingredients))
                            <ul>
                                @foreach($recipe->ingredients as $ingredient)
                                    <li>{{ $ingredient }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No ingredients available.</p>
                        @endif
                    </td>

                    <!-- Display Instructions as a List -->
                    <td>
                        @if(is_array($recipe->instructions) && !empty($recipe->instructions))
                            <ol>
                                @foreach($recipe->instructions as $instruction)
                                    <li>{{ $instruction }}</li>
                                @endforeach
                            </ol>
                        @else
                            <p>No instructions available.</p>
                        @endif
                    </td>
                    
                    <!-- Display Recipe Image -->
                    <td>
                        @if($recipe->image)
                            <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" style="width: 100px;">
                        @else
                            <p>No image available.</p>
                        @endif
                    </td>
                    
                    <!-- Actions -->
                    <td>
                        <a href="{{ url('edit-recipes', $recipe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ url('delete-receipe', $recipe->id) }}" class="btn btn-warning btn-sm">Delete </a>
                           
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
