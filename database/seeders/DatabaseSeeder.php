<?php

namespace Database\Seeders;

use App\Enums\DayType;
use App\Models\Duration;
use App\Models\LeaveType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        LeaveType::create(['name' => 'Vacation']);
        LeaveType::create(['name' => 'Sick']);
        LeaveType::create(['name' => 'Personal']);

        Duration::create(['name' => 'One full day']);
        Duration::create(['name' => 'First half of day', 'day' => DayType::HALF]);
        Duration::create(['name' => 'Second half of day', 'day' => DayType::HALF]);
        Duration::create(['name' => 'Multiple days', 'day' => DayType::MULTIPLE]);
        Duration::create(['name' => 'Partial day', 'day' => DayType::PARTIAL]);
    }
}
