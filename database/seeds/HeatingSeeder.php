<?php

use Illuminate\Database\Seeder;
use App\Models\Heating;

class HeatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getHeatings() as $heating){
            Heating::create(['type' => $heating]);
        }
    }

    private function getHeatings()
    {
        return [
            'Парно',
            'Струја',
            'Плин'
        ];
    }
}
