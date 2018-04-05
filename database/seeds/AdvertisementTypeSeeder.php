<?php

use Illuminate\Database\Seeder;

class AdvertisementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach ($this->getAdvertisementTypes() as $type)
        {
           \App\AdvertisementType::create(['type'=>$type]);
        }
    }

    private function getAdvertisementTypes()
    {
        return [
            'барам',
            'нудам'
        ];
    }
}
