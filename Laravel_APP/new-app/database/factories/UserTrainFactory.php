<?php

namespace Database\Factories;

use App\Models\UserTrain;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserTrainFactory extends Factory
{
    protected $model = UserTrain::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt($this->faker->password),
        ];
    }
}
