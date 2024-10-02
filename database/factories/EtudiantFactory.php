<?php

namespace Database\Factories;
use App\models\Etudiant;
use App\models\Model;
use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
   
    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     
     * @return array<string, mixed>
     
     */
    public function definition()
    {
        return [
           'nom'=> $this->faker->lastname(),
           'prenom'=> $this->faker->firstname(),
           'classes_id' => rand(1, 6),
           
        ];
    }
}
