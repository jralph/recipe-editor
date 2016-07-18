<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Recipe;

class AdminController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('bundle')->get();

        return $this->view->make('admin.index', [
            'recipes' => $recipes
        ]);
    }
}