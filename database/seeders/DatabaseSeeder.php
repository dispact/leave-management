<?php

namespace Database\Seeders;

use App\Enums\DayType;
use App\Models\Setting;
use App\Models\Duration;
use App\Models\LeaveType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        Duration::create(['name' => 'First half of day', 'day' => DayType::FIRST_HALF]);
        Duration::create(['name' => 'Second half of day', 'day' => DayType::SECOND_HALF]);
        Duration::create(['name' => 'Multiple days', 'day' => DayType::MULTIPLE]);
        Duration::create(['name' => 'Partial day', 'day' => DayType::PARTIAL]);

        $user = Role::create(['name' => 'user']);
        $supervisor = Role::create(['name' => 'supervisor']);
        $administrator = Role::create(['name' => 'administrator']);

        Permission::create(['name' => 'leave.read'])->syncRoles([$user, $supervisor, $administrator]);
        Permission::create(['name' => 'leave.write'])->syncRoles([$user, $supervisor, $administrator]);

        Permission::create(['name' => 'approval.read'])->syncRoles([$supervisor, $administrator]);
        Permission::create(['name' => 'approval.write'])->syncRoles([$supervisor, $administrator]);

        Permission::create(['name' => 'users.read'])->syncRoles([$administrator]);
        Permission::create(['name' => 'users.write'])->syncRoles([$administrator]);

        Permission::create(['name' => 'settings.read'])->syncRoles([$administrator]);
        Permission::create(['name' => 'settings.write'])->syncRoles([$administrator]);

        DB::table('model_has_roles')->insert([
            'role_id' => '3', 'model_type' => 'App\Models\User', 'model_id' => '1'
        ]);

        Setting::create(['key' => 'googleCalendarId']);
        Setting::create(['key' => 'defaultApprover']);
    }
}
