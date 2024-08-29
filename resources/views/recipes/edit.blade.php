<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Recipe - TaleOfYum</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">Edit Recipe</h1>

        <form action="/update-recipes/{{$recipe->id}}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
            {{csrf_field()}}
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
                    <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="img-thumbnail mt-2" style="width: 150px;">
                @endif
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary"> <i class="fas fa-plus"></i>Update Recipe</button>
            <a href="{{ url('view-receipe') }}" class="btn btn-secondary">Back to Recipes</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
