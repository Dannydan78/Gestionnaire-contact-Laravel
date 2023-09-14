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
            'Adresse postale' => fake()->streetAddress(),
            'Numero de telephone' => fake()->phoneNumber(),
            'Date de naissance' => fake()->dateTime(),
            'email' => fake()->unique()->safeEmail(),

        ];
    }
}
