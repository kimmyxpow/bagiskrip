<?php

namespace Database\Seeders;

use App\Models\Visibility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visibility::create(['hash' => bin2hex(random_bytes(20)), 'name' => 'Public']);
        Visibility::create(['hash' => bin2hex(random_bytes(20)), 'name' => 'Private']);
    }
}
