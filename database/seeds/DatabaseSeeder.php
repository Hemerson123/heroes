<?php

use Illuminate\Database\Seeder;
use App\heroe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $heroes= factory(heroe::class,20) ->create();
    }
}
