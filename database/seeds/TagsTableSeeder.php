<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Tag as Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
			[
				'title_ld' => 'ji samont',
				'title_it' => 'passeggiate sull’alpe',
				'title_de' => 'auf die Alm gehen',
				'name' => '{}'
			],
			[
				'title_ld' => 'jites',
				'title_it' => 'gite',
				'title_de' => 'Ausflüge',
				'name' => '{}'
			],	
			[
				'title_ld' => 'baby-sitting',
				'title_it' => 'baby-sitting',
				'title_de' => 'Baby-sitting',
				'name' => '{}'
			],	
			[
				'title_ld' => 'pastelné',
				'title_it' => 'manualità',
				'title_de' => 'basteln',
				'name' => '{}'
			],	
			[
				'title_ld' => 'acumpaniament',
				'title_it' => 'accompagnamento',
				'title_de' => 'Begleitung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'Auti',
				'title_it' => 'Macchine',
				'title_de' => 'Autos',
				'name' => '{}'
			],	
			[
				'title_ld' => 'consulenza',
				'title_it' => 'consulenza',
				'title_de' => 'Beratung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'assistënza',
				'title_it' => 'assistenza',
				'title_de' => 'Betreuung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cumiscions',
				'title_it' => 'commissioni',
				'title_de' => 'Botengänge',
				'name' => '{}'
			],	
			[
				'title_ld' => 'paidelné',
				'title_it' => 'stirare',
				'title_de' => 'bügeln',
				'name' => '{}'
			],	
			[
				'title_ld' => 'ufizes',
				'title_it' => 'uffici',
				'title_de' => 'Büros',
				'name' => '{}'
			],	
			[
				'title_ld' => 'computer',
				'title_it' => 'computer',
				'title_de' => 'Computer',
				'name' => '{}'
			],	
			[
				'title_ld' => 'documenc',
				'title_it' => 'documenti',
				'title_de' => 'Dokumente',
				'name' => '{}'
			],	
			[
				'title_ld' => 'ji a cumpré ite',
				'title_it' => 'fare spesa',
				'title_de' => 'einkaufen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'eletronica',
				'title_it' => 'elettronica',
				'title_de' => 'Elektronik',
				'name' => '{}'
			],	
			[
				'title_ld' => 'filmé',
				'title_it' => 'filmare',
				'title_de' => 'filmen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'adurvé aparat da fé fotos',
				'title_it' => 'utilizzo macchina fotografica',
				'title_de' => 'Fotoapparat benutzen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'fotografia y film',
				'title_it' => 'fotografia e film',
				'title_de' => 'Fotografie und Film',
				'name' => '{}'
			],	
			[
				'title_ld' => 'lauré ora fotografies',
				'title_it' => 'modificare foto',
				'title_de' => 'Fotos bearbeiten',
				'name' => '{}'
			],	
			[
				'title_ld' => 'tëmp liede',
				'title_it' => 'tempo libero',
				'title_de' => 'Freizeit',
				'name' => '{}'
			],	
			[
				'title_ld' => 'gestion y contabltà',
				'title_it' => 'gestione contabilità',
				'title_de' => 'Führung Buchhaltung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'verzon',
				'title_it' => 'Giardinaggio',
				'title_de' => 'Gartenarbeit',
				'name' => '{}'
			],	
			[
				'title_ld' => 'tenì cumpanìa',
				'title_it' => 'stare in compagnia',
				'title_de' => 'Gesellschaft leisten',
				'name' => '{}'
			],	
			[
				'title_ld' => 'juesc da mëisa',
				'title_it' => 'giochi di società',
				'title_de' => 'Gesellschaftsspiele',
				'name' => '{}'
			],	
			[
				'title_ld' => 'ginastiga',
				'title_it' => 'ginnastica',
				'title_de' => 'Gymnastik',
				'name' => '{}'
			],	
			[
				'title_ld' => 'hechelné',
				'title_it' => 'uncinetto',
				'title_de' => 'häkeln',
				'name' => '{}'
			],	
			[
				'title_ld' => 'duvieres de cësa',
				'title_it' => 'compiti',
				'title_de' => 'Hausaufgaben',
				'name' => '{}'
			],	
			[
				'title_ld' => 'puzené',
				'title_it' => 'pulizie',
				'title_de' => 'Haushalt',
				'name' => '{}'
			],	
			[
				'title_ld' => 'aparac eletronics',
				'title_it' => 'elettrodomestici',
				'title_de' => 'Haushaltsgeräte',
				'name' => '{}'
			],	
			[
				'title_ld' => 'aiut ti stroc te cësa',
				'title_it' => 'aiuto domestico',
				'title_de' => 'Haushaltshilfe',
				'name' => '{}'
			],	
			[
				'title_ld' => 'aiut / judé',
				'title_it' => 'aiuto',
				'title_de' => 'Hilfe',
				'name' => '{}'
			],	
			[
				'title_ld' => 'leniam',
				'title_it' => 'legna',
				'title_de' => 'Holz',
				'name' => '{}'
			],	
			[
				'title_ld' => 'informatica',
				'title_it' => 'informatica',
				'title_de' => 'Informatik',
				'name' => '{}'
			],	
			[
				'title_ld' => 'nstalazion',
				'title_it' => 'installazione',
				'title_de' => 'Installation',
				'name' => '{}'
			],	
			[
				'title_ld' => 'manutenzion',
				'title_it' => 'manutenzione',
				'title_de' => 'Instandhaltung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'internet',
				'title_it' => 'internet',
				'title_de' => 'Internet',
				'name' => '{}'
			],	
			[
				'title_ld' => 'mutons jëuni',
				'title_it' => 'adolescenti',
				'title_de' => 'Jugendliche',
				'name' => '{}'
			],	
			[
				'title_ld' => 'carté',
				'title_it' => 'giocare a carte',
				'title_de' => 'Karten spielen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'pitli mutons',
				'title_it' => 'bambini',
				'title_de' => 'Kinder',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cunzert',
				'title_it' => 'concerto',
				'title_de' => 'Konzert',
				'name' => '{}'
			],				
			[
				'title_ld' => 'cujiné',
				'title_it' => 'cucina',
				'title_de' => 'Küche',
				'name' => '{}'
			],	
			[
				'title_ld' => 'nsenië',
				'title_it' => 'insegnare',
				'title_de' => 'lehren / beibringen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'depënjer',
				'title_it' => 'dipingere',
				'title_de' => 'malen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'sblanchejé',
				'title_it' => 'pitturazione',
				'title_de' => 'Malerarbeiten',
				'name' => '{}'
			],	
			[
				'title_ld' => 'persones cun handicap',
				'title_it' => 'persone disabili',
				'title_de' => 'Menschen mit Beeinträchtigung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'mujiga',
				'title_it' => 'musica',
				'title_de' => 'Musik',
				'name' => '{}'
			],	
			[
				'title_ld' => 'suné strumenc',
				'title_it' => 'suonare strumenti musicali ',
				'title_de' => 'Musikinstrument spielen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'ëures de susteni',
				'title_it' => 'lezioni di ripetizione',
				'title_de' => 'Nachhilfeunterricht',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cujì',
				'title_it' => 'cucito',
				'title_de' => 'nähen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'curé plantes',
				'title_it' => 'cura piante',
				'title_de' => 'Pflanzenpflege',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cura',
				'title_it' => 'cura',
				'title_de' => 'Pflege',
				'name' => '{}'
			],
			[
				'title_ld' => 'cuncé',
				'title_it' => 'riparazioni',
				'title_de' => 'Reparaturen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'scioh',
				'title_it' => 'scacchi',
				'title_de' => 'Schach',
				'name' => '{}'
			],	
			[
				'title_ld' => 'jadiné',
				'title_it' => 'pattinare',
				'title_de' => 'Schlittschuhlaufen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'palé nëif',
				'title_it' => 'sgombero neve',
				'title_de' => 'Schnee schöpfen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'jënt de tëmp',
				'title_it' => 'anziani',
				'title_de' => 'Senioren',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cianté',
				'title_it' => 'cantare',
				'title_de' => 'singen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'smartphone',
				'title_it' => 'smartphone',
				'title_de' => 'smartphone',
				'name' => '{}'
			],	
			[
				'title_ld' => 'social media',
				'title_it' => 'social media',
				'title_de' => 'social media',
				'name' => '{}'
			],	
			[
				'title_ld' => 'ji a spaz',
				'title_it' => 'passeggiare',
				'title_de' => 'spazieren gehen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'juesc',
				'title_it' => 'giochi',
				'title_de' => 'Spiele',
				'name' => '{}'
			],	
			[
				'title_ld' => 'fé damat',
				'title_it' => 'giocare',
				'title_de' => 'spielen',
				'name' => '{}'
			],
			[
				'title_ld' => 'sport',
				'title_it' => 'sport',
				'title_de' => 'Sport',
				'name' => '{}'
			],	
			[
				'title_ld' => 'rujenedes',
				'title_it' => 'lingue',
				'title_de' => 'Sprachen',
				'name' => '{}'
			],	
			[
				'title_ld' => 'detlarazion dla chëutes',
				'title_it' => 'dichiarazione redditi',
				'title_de' => 'Steuererklärung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cujì ora',
				'title_it' => 'ricamo',
				'title_de' => 'sticken',
				'name' => '{}'
			],	
			[
				'title_ld' => 'fé ciauza',
				'title_it' => 'lavoro a maglia',
				'title_de' => 'stricken',
				'name' => '{}'
			],	
			[
				'title_ld' => 'atività „banca dl tëmp“',
				'title_it' => 'attività „banca del tempo“',
				'title_de' => 'Tätigkeit „Zeitbank“',
				'name' => '{}'
			],	
			[
				'title_ld' => 'telefon',
				'title_it' => 'telefono',
				'title_de' => 'Telefon',
				'name' => '{}'
			],	
			[
				'title_ld' => 'teater',
				'title_it' => 'teatro',
				'title_de' => 'Theater',
				'name' => '{}'
			],	
			[
				'title_ld' => 'tieres',
				'title_it' => 'animali',
				'title_de' => 'Tiere',
				'name' => '{}'
			],	
			[
				'title_ld' => 'cialé sun l tier',
				'title_it' => 'cura temporanea',
				'title_de' => 'Tierpension',
				'name' => '{}'
			],	
			[
				'title_ld' => 'lëures da tistler',
				'title_it' => 'falengnameria',
				'title_de' => 'Tischlerarbeit',
				'name' => '{}'
			],	
			[
				'title_ld' => 'trapiné',
				'title_it' => 'traslochi',
				'title_de' => 'Übersiedlung',
				'name' => '{}'
			],	
			[
				'title_ld' => 'lezion',
				'title_it' => 'lezione',
				'title_de' => 'Unterricht',
				'name' => '{}'
			],	
			[
				'title_ld' => 'gestion dla plata internet',
				'title_it' => 'gestione sito internet',
				'title_de' => 'Verwaltung Webseite Internet',
				'name' => '{}'
			],	
			[
				'title_ld' => 'vijites',
				'title_it' => 'visite',
				'title_de' => 'Visiten',
				'name' => '{}'
			],				
			[
				'title_ld' => 'liejer',
				'title_it' => 'lettura',
				'title_de' => 'Vorlesen',
				'name' => '{}'
			],
			[
				'title_ld' => 'apuntamënc',
				'title_it' => 'prenotazioni',
				'title_de' => 'Vormerkungen',
				'name' => '{}'
			],
			[
				'title_ld' => 'dessenië',
				'title_it' => 'disegnare',
				'title_de' => 'zeichnen',
				'name' => '{}'
			],		
			
			
		]);		
		
		
		foreach(Tag::all() as $tag){
				$tag->save();
		}
		
		
    }
}
