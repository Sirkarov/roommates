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
        // $this->call(UsersTableSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(AdvertisementTypeSeeder::class);
        $this->call(CharacteristicSeeder::class);
        $this->call(CitySeeder::class);
    }
}
