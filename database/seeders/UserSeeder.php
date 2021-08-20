<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
        	'name' => 'Administrador',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('123456'),
			'rol_id' => 1,
			'status' => 1
        ]);
    }
}
