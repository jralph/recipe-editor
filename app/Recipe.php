<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bundle_id',
        'method',
        'prep_time',
        'cook_time',
        'description'
    ];

    public $timestamps = false;

    public function bundles()
    {
        return $this->belongsTo(Bundle::class);
    }
    
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipes_ingredients', 'id', 'recipe_id')->withPivot([
            'measurement',
            'quantity'
        ]);
    }
}
