<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'REGEN RELAX',
                'slug' => 'regen-relax',
                'duration' => 60,
                'price' => 40.00,
                'description' => 'Kombinovaná relaxačná masáž s baňkovaním. Uvoľnenie tela aj mysle. Ideálna pre tých, ktorí hľadajú úľavu od stresu a napätia.',
                'category' => 'main',
                'sort_order' => 1,
            ],
            [
                'name' => 'REGEN SPORT',
                'slug' => 'regen-sport',
                'duration' => 60,
                'price' => 50.00,
                'description' => 'Regenerácia pre športovcov a fyzicky náročné profesie. Špeciálne techniky pre rýchlejšiu regeneráciu svalov a zlepšenie výkonu.',
                'category' => 'main',
                'sort_order' => 2,
            ],
            [
                'name' => 'REGEN THERAPY',
                'slug' => 'regen-therapy',
                'duration' => 60,
                'price' => 58.00,
                'description' => 'Terapeutická hodina zameraná na konkrétny problém. Hĺbkové uvoľnenie, myofasciálne uvoľnenie (MFR), mobilizácia a manuálna terapia.',
                'category' => 'main',
                'sort_order' => 3,
            ],
            [
                'name' => 'KINEZIOTEJPING',
                'slug' => 'kineziotejping',
                'duration' => 15,
                'price' => 10.00,
                'description' => 'Aplikácia kineziotejpu pre podporu svalov a kĺbov. Doplnková služba k masáži alebo samostatne.',
                'category' => 'addon',
                'sort_order' => 4,
            ],
            [
                'name' => 'MADEROTERAPIA',
                'slug' => 'maderoterapia',
                'duration' => 40,
                'price' => 35.00,
                'description' => 'Masáž drevenými nástrojmi pre modelovanie postavy, redukciu celulitídy a zlepšenie krvného obehu.',
                'category' => 'addon',
                'sort_order' => 5,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
