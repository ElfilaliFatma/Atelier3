<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etudiant;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class); // Seed roles first
        $this->call(ClasseTableSeeder::class); // Seed classes next
    
        if (Etudiant::count() === 0) {
            Etudiant::factory(30)->create(); // Create students only if none exist
            echo "Students seeded successfully.\n";
        } else {
            echo "Students already exist in the database. Skipping seeding.\n";
        }
    }
}    