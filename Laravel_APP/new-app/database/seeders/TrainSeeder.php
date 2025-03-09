<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('train')->insert([
            [
                'name' => 'Express Train ' . Str::random(5),
                'source' => 'Dhaka',
                'destination' => 'Chattogram',
                'schedule' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-11 10:00:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regional Train ' . Str::random(5),
                'source' => 'Sylhet',
                'destination' => 'Chattogram',
                'schedule' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-12 14:30:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Intercity Train ' . Str::random(5),
                'source' => 'Khulna',
                'destination' => 'Dhaka',
                'schedule' => Carbon::createFromFormat('Y-m-d H:i:s', '2023-09-13 18:45:00'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
