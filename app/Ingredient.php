<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'recipes_pantry';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    
    public $timestamps = false;

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipes_ingredients', 'id', 'pantry_id')->withPivot([
            'measurement',
            'quantity'
        ]);
    }
}
