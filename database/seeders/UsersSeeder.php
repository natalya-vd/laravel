<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert($this->getData());
    }

    private function getData()
    {
        return [
            'name' => 'admin',
            'email' => 'Admin@admin.ru',
            'password' => Hash::make('123'),
            'is_admin' => 1
        ];
    }
}
