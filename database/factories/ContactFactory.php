<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom' => fake()->lastName(),
            'Prenom' => fake()->firstNameMale(),
            'Adresse_postale' => fake()->streetAddress(),
            'Numero_de_telephone' => fake()->phoneNumber(),
            'Date_de_naissance' => fake()->dateTime(),
            'Email' => fake()->unique()->safeEmail(),


        ];
    }
}
