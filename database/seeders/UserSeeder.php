<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CUsers;
use App\Models\Documents;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     CUsers::create([
    //         'fullname' => 'John doe',
    //         'email' => 'john@gmail.com',
    //     ]);
    // }

    public function run(): void
    {
        // \DB::table('users')->insert([
        //     'fullname' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        // ]);

        // CUsers::factory()
        Documents::factory()
        // UserFactory::factory()
        ->count(5)
        // ->hasPosts(1)
        ->create();
    }
}
