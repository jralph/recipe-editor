<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Ingredient;
use App\Recipe;

class RecipeController extends Controller
{
    public function show($recipe)
    {
        $recipe = Recipe::firstOrFail($recipe);

        return $this->view->make('admin.recipe', [
            'recipe' => $recipe
        ]);
    }

    public function edit($recipe)
    {

    }

    public function create()
    {
        return $this->view->make('admin.new', [
            'ingredients' => Ingredient::orderBy('name')->get()
        ]);
    }
    
    public function store()
    {
        
    }
    
    public function update($recipe)
    {
        
    }
    
    public function delete($recipe)
    {
        
    }
}