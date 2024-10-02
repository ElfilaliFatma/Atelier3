<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
         $this->call(ClassesTableSeeder::class); // Seed classes first
        Etudiant::factory(30)->create(); // Then create students
        
    }
    
}
