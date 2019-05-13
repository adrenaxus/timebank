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
				'name' => 'Tobias',
				'email' => 'tobias.user@tobias.tobias',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('tobias')
				
			],
			[
				'name' => 'Tobias',
				'email' => 'tobias.admin@tobias.tobias',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('tobias')
				
			],

			[
				'name' => 'Elisabeth',
				'email' => 'elisabeth.user@elisabeth.elisabeth',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('elisabeth')
				
			],
			[
				'name' => 'Elisabeth',
				'email' => 'elisabeth.admin@elisabeth.elisabeth',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('elisabeth')
				
			],

			[
				'name' => 'Renate',
				'email' => 'renate.user@renate.renate',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('renate')
				
			],
			[
				'name' => 'Renate',
				'email' => 'renate.admin@renate.renate',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('renate')
				
			],

			[
				'name' => 'Martina',
				'email' => 'martina.user@martina.martina',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('martina')
				
			],
			[
				'name' => 'Martina',
				'email' => 'martina.admin@martina.martina',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('martina')
				
			],

			[
				'name' => 'Thea',
				'email' => 'thea.user@thea.thea',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('thea')
				
			],
			[
				'name' => 'Thea',
				'email' => 'thea.admin@thea.thea',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('thea')
				
			],

			[
				'name' => 'Kostner',
				'email' => 'kostner.user@kostner.kostner',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('kostner')
				
			],
			[
				'name' => 'Kostner',
				'email' => 'kostner.admin@kostner.kostner',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('kostner')
				
			],

			[
				'name' => 'Gabi',
				'email' => 'gabi.user@gabi.gabi',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('gabi')
				
			],
			[
				'name' => 'Gabi',
				'email' => 'gabi.admin@gabi.gabi',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('gabi')
				
			],

			[
				'name' => 'Heidi',
				'email' => 'heidi.user@heidi.heidi',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('heidi')
				
			],
			[
				'name' => 'Heidi',
				'email' => 'heidi.admin@heidi.heidi',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('heidi')
				
			],

			[
				'name' => 'Samuel',
				'email' => 'samuel.user@samuel.samuel',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('samuel')
				
			],
			[
				'name' => 'Samuel',
				'email' => 'samuel.admin@samuel.samuel',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('samuel')
				
			],

			[
				'name' => 'Marion',
				'email' => 'marion.user@marion.marion',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('marion')
				
			],
			[
				'name' => 'Marion',
				'email' => 'marion.admin@marion.marion',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('marion')
				
			],

			[
				'name' => 'Bruni',
				'email' => 'bruni.user@bruni.bruni',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('bruni')
				
			],
			[
				'name' => 'Bruni',
				'email' => 'bruni.admin@bruni.bruni',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('bruni')
				
			],

			[
				'name' => 'Gretl',
				'email' => 'gretl.user@gretl.gretl',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('gretl')
				
			],
			[
				'name' => 'Gretl',
				'email' => 'gretl.admin@gretl.gretl',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('gretl')
				
			],

			[
				'name' => 'Ludiwg',
				'email' => 'ludwig.user@ludwig.ludwig',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('ludwig')
				
			],
			[
				'name' => 'Ludiwg',
				'email' => 'ludwig.admin@ludwig.ludwig',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('ludwig')
				
			],

			[
				'name' => 'Moritz',
				'email' => 'moritz.user@moritz.moritz',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('moritz')
				
			],
			[
				'name' => 'Moritz',
				'email' => 'moritz.admin@moritz.moritz',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('moritz')
				
			],

			[
				'name' => 'Christine',
				'email' => 'christine.user@christine.christine',
				'role' => 'user',
				'language' => 'de',
				'password' => bcrypt('christine')
				
			],
			[
				'name' => 'Christine',
				'email' => 'christine.admin@christine.christine',
				'role' => 'admin',
				'language' => 'de',
				'password' => bcrypt('christine')
				
			],			
		]);
		
    }
}
