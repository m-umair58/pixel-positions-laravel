<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Muhammad Umair',
            'email' => 'mianumair1958@gmail.com',
            'password' => 12345678,
            'role' => 'employer'
        ]);

        Employer::factory()->create([
            'user_id' => $user->id,
            'name' => 'KeepCodeIn',
            'logo' => 'logos/3gsLVY5fu05NOlLRswf181VmD9l5A4N6z1IKGHeO.jpg'
        ]);

        $this->call(JobSeeder::class);
    }
}
