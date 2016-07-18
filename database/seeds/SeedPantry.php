<?php

use Illuminate\Database\Seeder;

class SeedPantry extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ingredient::class, 50)->create();
    }
}
