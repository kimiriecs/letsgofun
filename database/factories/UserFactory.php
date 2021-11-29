<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $titleMale = $this->faker->titleMale();
      $firstNameMale = $this->faker->firstNameMale();

      $titleFemale = $this->faker->titleFemale();
      $firstNameFemale = $this->faker->firstNameFemale();

      $lastName = $this->faker->lastName();

      $nameMale = $titleMale . ' ' . $firstNameMale . ' ' . $lastName;
      $nameFemale = $titleFemale . ' ' . $firstNameFemale . ' ' . $lastName;


      $userName = $this->faker->randomElement([$nameMale, $nameFemale]);
      // $userName = $this->faker->name;
      $userEmail = $this->faker->unique()->safeEmail;
      $userPassword = bcrypt('password'); // password

      $data = [
        'name' => $userName,
        'email' => $userEmail,
        'password' => $userPassword,
      ];

      return $data;


        // return [
        //     'name' => $this->faker->name,
        //     'email' => $this->faker->unique()->safeEmail,
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ];
    }
}
