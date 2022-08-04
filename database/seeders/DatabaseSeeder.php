<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Arrondissement;
use App\Models\Cluster;
use App\Models\Commune;
use App\Models\Departement;
use App\Models\Filiere;
use App\Models\Village;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Filiere::create([
            'nom' => 'coton'
        ]);
        Filiere::create([
            'nom' => 'riz'
        ]);

        Departement::insert([
            ['nom' => 'Donga'],
            ['nom' => 'Alibori']
        ]);

        Commune::insert([
            [
            'nom'=>'djougou',
            'departement_id'=> 1
          ],
            [
                'nom' => 'banikora',
                'departement_id' => 2
            ],
        ]);

        Arrondissement::insert([
            [
                'nom' => 'banikora',
                'commune_id' => 1
            ],
            [
                'nom' => 'kolokondé',
                'commune_id' => 2
            ],
        ]);
        Village::insert([
            [
                'nom' => 'arbonga',
                'arrondissement_id' => 1
            ],
            [
                'nom' => 'village',
                'arrondissement_id' => 2
            ],
        ]);
        Cluster::insert([
            [
                'nom' => 'arbonga',
                'village_id' => 1,
                'filiere_id' => 1,

            ],
            [
                'nom' => 'arbonga',
                'village_id' => 2,
                'filiere_id' => 2
            ],
        ]);
    }
}
