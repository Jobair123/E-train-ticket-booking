<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTrain;

class UserTrainSeeder extends Seeder
{
    public function run()
    {
        UserTrain::factory()->count(20)->create();
    }
}
