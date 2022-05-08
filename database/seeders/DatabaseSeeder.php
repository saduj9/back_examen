<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\DivisionSup;
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
        // \App\Models\User::factory(10)->create();
        DivisionSup::factory(3)->create();
        Division::factory(3)->create();

    }
}
