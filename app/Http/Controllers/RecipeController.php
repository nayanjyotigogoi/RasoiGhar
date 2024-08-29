<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;
use Illuminate\Support\Facades\Storage;
class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('view', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'ingredients' => 'required|array',
        'ingredients.*' => 'required|string',
        'instructions' => 'required|array',
        'instructions.*' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Handle the image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('recipes', 'public');
    }

    // Create the recipe
    Recipe::create([
        'title' => $validatedData['title'],
        'ingredients' => $validatedData['ingredients'], // Directly store the array
        'instructions' => $validatedData['instructions'], // Directly store the array
        'image' => $imagePath,
    ]);
       
        return redirect("/view-receipe")->with('success', 'Recipe added successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Retrieve all recipes from the database
        $recipes = Recipe::all();

        // Pass the recipes data to the view
        return view('recipes.view', compact('recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipes.edit', compact('id','recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'title' => 'required|string|',
                'ingredients' => 'required|string',
                'instructions' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            ]);

            $recipe = Recipe::find($id);

            // Update the recipe details
            $recipe->title = $request->input('title');
            $recipe->ingredients = explode(', ', $request->input('ingredients'));
            $recipe->instructions = explode(', ', $request->input('instructions'));

            // Handle the image upload
            if ($request->hasFile('image')) {
                // Delete the old image if exists
                if ($recipe->image && Storage::exists('public/' . $recipe->image)) {
                    Storage::delete('public/' . $recipe->image);
                }

                // Store the new image
                $imagePath = $request->file('image')->store('recipes', 'public');
                $recipe->image = $imagePath;
            }

            $recipe->save();

            return redirect("/view-receipe")->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipes = Recipe::find($id);
        $recipes->delete();
        return redirect('view-receipe')->with('success','Deleted Successfully');

    }
}
