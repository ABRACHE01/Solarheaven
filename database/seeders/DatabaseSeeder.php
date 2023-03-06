<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Appointment;
use App\Models\AppointmentHistory;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Not;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AdminSeeder::class,
            ClientSeeder::class,
            CitySeeder::class,
            ImageSeeder::class,
            ServiceSeeder::class,
            AppointementSeeder::class,
            ReviewSeeder::class,
            TechnisianSeeder::class,
            AppointmentHistorySeeder::class,
            NotificationSeeder::class,
           PaymentSeeder::class,
        ]);
    }
}
