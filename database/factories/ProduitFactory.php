<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom = $this->faker->sentence(3);
        return [
             'slug'=>Str::slug($nom),
              'nom'=>$nom,
              'description'=>$this->faker->paragraph(),
              'prix' =>rand(15000, 25000),
              'actif'=>$this->faker->boolean(), 
              'quantite'=> rand(1, 20),
              'image'=>$this->faker->imageUrl($widh=640, $height=480, 'fashion'),
              'categorie_id'=>rand(1,3)


        ];
    }
}
