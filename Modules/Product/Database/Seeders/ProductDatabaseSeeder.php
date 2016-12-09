<?php

namespace Modules\Product\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Product\Entities\Product;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Product::truncate();

        $faker = \Faker\Factory::create();

        Product::create([
            'name' => 'Integramilk',
            'intro' => 'Vitaminos ásványanyag kiegészitő tejelő tehenek részére',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Szarvasmarha Px',
            'intro' => 'Vitaminos ásványanyag takarmány kiegészitő',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Immunogest',
            'intro' => 'Vitaminos ásványanyag kiegészitő szárazonálló tehenek részére',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Huni Buffer 200',
            'intro' => 'Vitaminos ásványanyag kiegészitő tejelő tehenek részére',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Huni Dairy L',
            'intro' => 'Vitaminos folyékony takarmány kiegészitő, fokozott igénybevételű tejelő tehenek részére',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Kanna vagy 200/1000 Kg',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Amino Pro',
            'intro' => 'Fehérje koncentrátum (70 % Nyers fehérje)',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Vegefat',
            'intro' => 'Tisztitott és hidrogénezett pálmaolaj zsir (97% Nyers Zsirok és olajak)',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Huni Mico Check',
            'intro' => 'Toxinkötő tejelő tehenek részére',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Diat Mix',
            'intro' => 'Por alakú táplálék kiegészitő borjak részére',
            'description' => 'feltöltés alatt...',
            'packings' => '100 gr/tasak vagy 5 Kg/vödör',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Vigor Vital',
            'intro' => 'Saccharomyces alapú takarmány kiegésztő - bendő müködési problémákra tejelő tehenek részére',
            'description' => 'feltöltés alatt...',
            'packings' => '100 gr/tasak',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Brodimax Krém',
            'intro' => 'Azonnal használható mérgező csali patkányok és egerek ellen',
            'description' => 'feltöltés alatt...',
            'packings' => '5 Kg/vödör',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Pre Masto',
            'intro' => 'Fejés elötti tőgyfertőtlenitő',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Kanna',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Huni Masto 1',
            'intro' => 'Narancssárga szinű fejés utani klórhexidin alapú tőgyfertőtlenitő',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Kanna vagy 200 Kg/Hordó',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Gluco H Film',
            'intro' => 'Kék szinű fejés utáni Klórhexidin-Diglükonát alapú tőgyfertőtlenitő',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Kanna vagy 200 Kg/Hordó',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Iodo H Cream',
            'intro' => 'Barna szinű fejés utáni Jód alapú tőgyfertőtlenitő',
            'description' => 'feltöltés alatt...',
            'packings' => '25 Kg/Kanna vagy 200 Kg/Hordó',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Stone Crick',
            'intro' => 'Komplett szuper-prémium kutyatáp aktiv kutyáknak',
            'description' => 'feltöltés alatt...',
            'packings' => '14 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Mister Puppy',
            'intro' => 'Komplett szuper-prémium kutyatáp fiatal kutyáknak, illetve vemhes vagy szoptató szukák részére',
            'description' => 'feltöltés alatt...',
            'packings' => '14 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);

        Product::create([
            'name' => 'Mister Old Light',
            'intro' => 'Komplett szuper-prémium kutyatáp idős kutyáknak',
            'description' => 'feltöltés alatt...',
            'packings' => '14 Kg/Zsák',
            'image' => $faker->imageUrl(200, 200, 'animals', true)
        ]);
    }
}
