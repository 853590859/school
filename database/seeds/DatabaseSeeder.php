<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (app()->environment() == 'production') {
            return;
        }
        // $this->call(UsersTableSeeder::class);
    }
}
