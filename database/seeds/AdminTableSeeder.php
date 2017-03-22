<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('admin')->insert(
					[
						[
							'username' => 'admin',
							'password' => "123",
						],
						[
							'username' => 'dunglun1',
							'password' => "123",
						],
						[
							'username' => 'admin1',
							'password' => "12345",
						]
						
					]
				);

    }
}
