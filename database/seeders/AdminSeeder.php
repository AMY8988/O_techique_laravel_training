<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::factory()->create([
            'name' => 'Amy Moe',
            'email' => 'amymoe@gmail.com',
            'password' => 'asdfjkl;',
            'is_owner' => true
        ]);
        Admin::factory()->count(5)->create();
    }
}
