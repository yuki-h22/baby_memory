<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
             // BabiesTableSeederを読み込むように指定
     $this->call(BabiesTableSeeder::class);
    }
}
