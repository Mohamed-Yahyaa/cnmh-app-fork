<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeHandicapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TypeHandicap::factory(50)->create();
    }
}
