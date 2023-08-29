<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['Applicazioni Desktop', 'Applicazioni Web', 'Applicazioni Mobile', 'Giochi per Computer e Console', 'Software Open Source', 'Design Grafico', 'Ricerca Scientifica'];
        foreach ($types as $item) {
            $type = new Type();
            $type->name = $item;
            $type->save();
        }
    }
}
