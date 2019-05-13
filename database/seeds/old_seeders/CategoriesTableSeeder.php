<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			[
				'title_ld' => 'Seniores',
				'title_it' => 'Anziani',
				'title_de' => 'Senioren',
			],
			[
				'title_ld' => 'Mutons',
				'title_it' => 'Bambini',
				'title_de' => 'Kinder',
			],			
			[
				'title_ld' => 'Mutons scola mesana',
				'title_it' => 'Ragazzi',
				'title_de' => 'Jugendliche',
			],			
			[
				'title_ld' => 'Handicap',
				'title_it' => 'Handicap',
				'title_de' => 'Behinderte',
			],
						[
				'title_ld' => 'Tieres',
				'title_it' => 'Animali',
				'title_de' => 'Tiere',
			],
			[
				'title_ld' => 'Cësa y stroc te cësa',
				'title_it' => 'Casa e faccende domestiche',
				'title_de' => 'Haus und Haushaltsarbeiten',
			],
			[
				'title_ld' => 'Verzon',
				'title_it' => 'Giardinaggio',
				'title_de' => 'Gartenarbeit',
			],
						[
				'title_ld' => 'Cumiscions',
				'title_it' => 'Commissioni',
				'title_de' => 'Botengänge',
			],
			[
				'title_ld' => 'Rujenedes',
				'title_it' => 'Lingue',
				'title_de' => 'Sprachen',
			],
			[
				'title_ld' => 'Cujiné',
				'title_it' => 'Cucina',
				'title_de' => 'Küche',
			],			
			[
				'title_ld' => 'Fotografia',
				'title_it' => 'Fotografia',
				'title_de' => 'Fotografieren',
			],	
			[
				'title_ld' => 'Informatica',
				'title_it' => 'Informatica',
				'title_de' => 'Informatik',
			],			
			[
				'title_ld' => 'Tëmp liede',
				'title_it' => 'Tempo libero',
				'title_de' => 'Freizeit',
			],
			
			
		]);
    }
}
