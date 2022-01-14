<?php

namespace Database\Seeders;

use FieldsSeeder;
use FormSeeder;
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
        $this->call(FieldsSeeder::class);
        $this->call(FormSeeder::class);
    }
}
