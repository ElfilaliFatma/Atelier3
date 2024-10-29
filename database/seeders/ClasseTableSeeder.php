<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('classes')->insert([
            ['libelle' => '6eme'],
            ['libelle' => '5éme'],
            ['libelle' => '4éme'],
            ['libelle' => '3éme'],
            ['libelle' => '2éme'],
            ['libelle' => '1ére'],
        ]);
        
    
        if (DB::table('classes')->count() > 0) {
            echo "Classes seeded successfully.\n";
        } else {
            echo "Failed to seed classes.\n";
        }
    }
}

