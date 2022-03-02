<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class categorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create(
            [
                'libelle'=>"Mode Homme",
                'image'=>'modehomme.jpg'
            ]);

        Categorie::create(
            [
                'libelle'=>"Mode Femme",
                'image'=>'modefemme.jpg'
            ]);

        Categorie::create(
            [
                'libelle'=>"Mode Enfant",
                'image'=>'modeenfant.jpg'
            ]);
    }
}
