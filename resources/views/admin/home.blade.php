@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Welcome, Admin</h1>
    <p class="lead">Here you can manage the recipes on TaleOfYum. Use the sidebar to navigate through options like adding a new recipe, viewing existing recipes, and more.</p>

    <div class="row">
        <div class="col-lg-6 mb-3">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title" >Add a New Recipe</h5>
                    <p class="card-text">Create and upload a new recipe to the website.</p>
                    <a  href="{{url('add-recipe')}}" class="btn btn-primary">Add Recipe</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">View All Recipes</h5>
                    <p class="card-text">Manage the recipes that have already been posted.</p>
                    <a href="{{url('view-receipe')}}" class="btn btn-primary">View Recipes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
