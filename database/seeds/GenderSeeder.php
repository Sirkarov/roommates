<?php

use Illuminate\Database\Seeder;
use App\Models\GenderType;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getGenders() as $gender){
            \App\Models\GenderType::create(['type' => $gender]);
        }
    }

    private function getGenders()
    {
        return [
            'Машко',
            'Женско'
        ];
    }
}
