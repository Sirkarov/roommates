<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getCities() as $city){
            City::create(['name' => $city]);
        }
    }
    private function getCities()
    {
        return [
            'Скопје',
            'Велес',
            'Кавадарци',
            'Битола',
            'Штип',
            'Пробиштип',
            'Неготино',
            'Гевгелија',
            'Струмица',
            'Тетово',
            'Гостивар',
            'Охрид',
            'Струга',
            'Куманово',
            'Крива Паланка',
        ];
    }
}
