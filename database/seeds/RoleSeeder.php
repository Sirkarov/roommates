<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getRoles() as $role){
            Role::create(['role' => $role]);
        }
    }
    private function getRoles()
    {
        return [
            'Администратор',
            'Модератор',
            'Корисник'
        ];
    }
}
