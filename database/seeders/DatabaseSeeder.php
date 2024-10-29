<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Etudiant;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(ClasseTableSeeder::class); 
        Etudiant::factory(30)->create(); 
      
    }
}    