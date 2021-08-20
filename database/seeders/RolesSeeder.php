<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
        	'rol' => 'Admin',
			'status' => 1
        ]);

        \DB::table('roles')->insert([
        	'rol' => 'Paciente',
			'status' => 1
        ]);
    }
}
