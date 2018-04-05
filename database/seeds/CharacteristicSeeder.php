<?php

use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getCharacteristics() as $characteristic)
        {
            App\Characteristic::create(['characteristic'=> $characteristic]);
        }
    }

    private function getCharacteristics()
    {
        return[
            'ТВ',
            'Интернет',
            'Кујна',
            'Клима',
            'Паркинг',
            'Балкон'
        ];
    }
}
