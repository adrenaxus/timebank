<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
	 
	 
	Tobias	 
	Elisabeth Kroisleitner (Elisabeth)
	Renate
	Martina
	Thea
	Elisabeth Kostner (Kostner)
	Gabi
	Heidi
	Samuel
	Marion
	Bruni
	Gretl
	Ludwig
	Moritz
	Christine	
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
     */
	 
	 
	 
	 
	 
    public function run()
    {
		DB::table('users')->insert([
			[
				'name' => 'Banca Dl Tëmp',
				'email' => 'info@bancadltemp.com',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('Bancadt19')
				
			]		
		]);
		
    }
}
