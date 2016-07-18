<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Ingredient;
use Illuminate\Http\Request;

class PantryController extends Controller
{
    public function index()
    {
        $ingredients = Ingredient::orderBy('name')->get();

        return $this->view->make('admin.pantry', [
            'ingredients' => $ingredients
        ]);
    }

    public function store(Request $request)
    {
        $name = $request->input('name');

        if (!Ingredient::where('name', $name)->first()) {
            Ingredient::create([
                'name' => $name
            ]);
        }

        return redirect()->back();
    }

    public function delete($ingredient)
    {
        Ingredient::where('id', $ingredient)->delete();

        return redirect()->back();
    }
}