<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Recipe - RasoiGhar</title>
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
        .btn-primary {
            background-color: #ff6347;
            border-color: #ff6347;
        }
        .btn-primary:hover {
            background-color: #ff4500;
            border-color: #ff4500;
        }
        .card {
            border-radius: 15px;
        }
        .form-container {
            max-width: 800px;
            margin: 0 auto;
        }
        @media (max-width: 767px) {
            .form-container {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" style="color: #ff6347"; href="{{ url('admin') }}">RasoiGhar</a>
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
    <div class="container form-container mt-5">
        <a href="{{ url('/admin') }}" class="btn btn-primary mb-4"><i class="fa fa-reply"></i>Back</a>
        <h1 class="mb-4 text-center" style="font-family: 'Lobster', cursive; font-size: 1.8rem; color: #800000; animation: fadeInLeft 2s;">Add New Recipe</h1>
        <form action="{{ url('recipes-create') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="title" class="form-label">Recipe Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <!-- Ingredients List -->
            <div class="mb-3">
                <label for="ingredients" class="form-label">Ingredients</label>
                <div id="ingredients-list">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="ingredients[]" placeholder="Enter an ingredient" required>
                        <button type="button" class="btn btn-outline-danger remove-ingredient">Remove</button>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary" id="add-ingredient"><i class="fa fa-plus"></i> Add Ingredient</button>
            </div>
            <!-- Instructions List -->
            <div class="mb-3">
                <label for="instructions" class="form-label">Instructions</label>
                <div id="instructions-list">
                    <div class="input-group mb-2">
                        <textarea class="form-control" name="instructions[]" rows="2" placeholder="Enter a step" required></textarea>
                        <button type="button" class="btn btn-outline-danger remove-instruction">Remove</button>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-primary" id="add-instruction"><i class="fa fa-plus"></i> Add Step</button>
            </div>
            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Recipe Image</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Recipe</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript for Dynamic Fields -->
    <script>
        document.getElementById('add-ingredient').addEventListener('click', function() {
            var newIngredient = document.createElement('div');
            newIngredient.classList.add('input-group', 'mb-2');
            newIngredient.innerHTML = `
                <input type="text" class="form-control" name="ingredients[]" placeholder="Enter an ingredient" required>
                <button type="button" class="btn btn-outline-danger remove-ingredient">Remove</button>
            `;
            document.getElementById('ingredients-list').appendChild(newIngredient);
        });

        document.getElementById('ingredients-list').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-ingredient')) {
                event.target.parentElement.remove();
            }
        });

        document.getElementById('add-instruction').addEventListener('click', function() {
            var newInstruction = document.createElement('div');
            newInstruction.classList.add('input-group', 'mb-2');
            newInstruction.innerHTML = `
                <textarea class="form-control" name="instructions[]" rows="2" placeholder="Enter a step" required></textarea>
                <button type="button" class="btn btn-outline-danger remove-instruction">Remove</button>
            `;
            document.getElementById('instructions-list').appendChild(newInstruction);
        });

        document.getElementById('instructions-list').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-instruction')) {
                event.target.parentElement.remove();
            }
        });
    </script>
</body>
</html>
