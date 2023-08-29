<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1; $i<10; $i++){
            $project = new Project();
            $project->titolo = $faker->word();
            $project->descrizione = $faker->text();
            $project->inizio_progetto = $faker->date();
            $project->consegna_progetto = $faker->date();
            $project->approvato = $faker->boolean();
            $project->non_approvato = $faker->boolean();
            $project->save();
        }
    }
}
