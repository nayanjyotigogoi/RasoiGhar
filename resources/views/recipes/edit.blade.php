<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recipe - RasoiGhar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px; /* Adjust for fixed navbar */
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-family: 'Lobster', cursive;
            font-size: 1.8rem;
            color: #ff6347;
        }

        .navbar-nav .nav-link {
            color: #333;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff6347;
        }

        .card {
            margin-top: 20px;
            animation: slideUp 0.6s ease-out;
        }

        .btn-primary {
            background-color: #ff6347;
            border-color: #ff6347;
        }

        .btn-primary:hover {
            background-color: #e55347;
            border-color: #e55347;
        }

        .form-label {
            font-weight: bold;
        }

        .img-thumbnail {
            max-width: 150px;
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
            <a class="navbar-brand" href="{{ url('admin') }}">RasoiGhar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container mt-5">
    <a href="{{ url('/admin') }}" class="btn btn-primary mb-4"><i class="fa fa-reply"></i>Back</a>
        <h1 class="mb-4" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #800000;">Edit Recipe</h1>

        <form action="/update-recipes/{{$recipe->id}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Recipe Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $recipe->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Recipe Ingredients -->
            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredients (Comma Separated)</label>
                <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{ old('ingredients', implode(', ', $recipe->ingredients)) }}" required>
                @error('ingredients')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <small class="form-text text-muted">Separate ingredients with commas.</small>
            </div>

            <!-- Recipe Instructions -->
            <div class="mb-3">
                <label for="instructions" class="form-label">Instructions (Comma Separated)</label>
                <input type="text" class="form-control" id="instructions" name="instructions" value="{{ old('instructions', implode(', ', $recipe->instructions)) }}" required>
                @error('instructions')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <small class="form-text text-muted">Separate instructions with commas.</small>
            </div>

            <!-- Recipe Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Recipe Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($recipe->image)
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="img-thumbnail mt-2">
                @endif
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Update Recipe</button> 
                
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
