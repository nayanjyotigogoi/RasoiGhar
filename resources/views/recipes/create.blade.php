@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Add New Recipe</h1>

    <form action="{{url('recipes-create') }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
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
            <button type="button" class="btn btn-outline-primary" id="add-ingredient">Add Ingredient</button>
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
            <button type="button" class="btn btn-outline-primary" id="add-instruction">Add Step</button>
        </div>

        {{-- <div class="mb-3">
            <label for="image" class="form-label">Recipe Image</label>
            <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
        </div> --}}

        <button type="submit" class="btn btn-primary">Add Recipe</button>
    </form>
</div>

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
@endsection
