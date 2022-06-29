<?php

namespace Database\Seeders;

use App\Http\Controllers\UsersController;
use Illuminate\Database\Seeder;
use App\Models\users;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Users::factory()->count(100)->create();

    }
}
