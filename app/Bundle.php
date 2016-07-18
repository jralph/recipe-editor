<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    protected $table = 'recipes_bundles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'week',
        'live'
    ];

    public $timestamps = false;

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
