<?php

use Illuminate\Database\Seeder;
use App\Models\ApartmentType;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getApartmentTypes() as $types)
        {
            ApartmentType::create(['type'=>$types]);
        }
    }

    public function getApartmentTypes(){
        return [
            'Стан',
            'Куќа'
        ];
    }
}
