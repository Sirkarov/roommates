<?php

use Illuminate\Database\Seeder;
use App\Models\Characteristic;

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
            Characteristic::create(['characteristic'=> $characteristic]);
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
