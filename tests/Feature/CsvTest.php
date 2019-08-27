<?php

namespace Tests\Feature;

use App\Services\Csv\Csv;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CsvTest extends TestCase
{

    private $mCsv;

    private const READ_CSV_FILE_PATH = __DIR__ . '/../resources/recipe-data-read.csv';
    private const WRITE_CSV_FILE_PATH = __DIR__ . '/../resources/recipe-data-write.csv';

    /**
     * Create a fresh instance before each test
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->mCsv = new Csv();
    }


    public function testReadFile(): void
    {
        $csvExpected = [
            [
                'id' => '1',
                'created_at' => '30/06/2015 17:58:00',
                'updated_at' => '30/06/2015 17:58:00',
                'box_type' => 'vegetarian',
                'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                'slug' => 'sweet-chilli-and-lime-beef-on-a-crunchy-fresh-noodle-salad',
                'short_title' => '',
                'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                'calories_kcal' => '401',
                'protein_grams' => '12',
                'fat_grams' => '35',
                'carbs_grams' => '0',
                'bulletpoint1' => '',
                'bulletpoint2' => '',
                'bulletpoint3' => '',
                'recipe_diet_type_id' => 'meat',
                'season' => 'all',
                'base' => 'noodles',
                'protein_source' => 'beef',
                'preparation_time_minutes' => '35',
                'shelf_life_days' => '4',
                'equipment_needed' => 'Appetite',
                'origin_country' => 'Great Britain',
                'recipe_cuisine' => 'asian',
                'in_your_box' => '',
                'gousto_reference' => '59'
            ],
            [
                'id' => '2',
                'created_at' => '30/06/2015 17:58:00',
                'updated_at' => '30/06/2015 17:58:00',
                'box_type' => 'gourmet',
                'title' => 'Tamil Nadu Prawn Masala',
                'slug' => 'tamil-nadu-prawn-masala',
                'short_title' => '',
                'marketing_description' => 'Tamil Nadu is a state on the eastern coast of the southern tip of India. Curry from there is particularly famous and it\'s easy to see why. This one is brimming with exciting contrasting tastes from ingredients like chilli powder, coriander and fennel seed',
                'calories_kcal' => '524',
                'protein_grams' => '12',
                'fat_grams' => '22',
                'carbs_grams' => '0',
                'bulletpoint1' => 'Vibrant & Fresh',
                'bulletpoint2' => 'Warming, not spicy',
                'bulletpoint3' => 'Curry From Scratch',
                'recipe_diet_type_id' => 'fish',
                'season' => 'all',
                'base' => 'pasta',
                'protein_source' => 'seafood',
                'preparation_time_minutes' => '40',
                'shelf_life_days' => '4',
                'equipment_needed' => 'Appetite',
                'origin_country' => 'Great Britain',
                'recipe_cuisine' => 'italian',
                'in_your_box' => 'king prawns, basmati rice, onion, tomatoes, garlic, ginger, ground tumeric, red chilli powder, ground cumin, fresh coriander, curry leaves, fennel seeds',
                'gousto_reference' => '58'
            ]
        ];

        $csvActual = $this->mCsv->readFile(self::READ_CSV_FILE_PATH);
        $this->assertEquals($csvExpected, $csvActual);
    }

    public function testWriteFile(): void
    {
        $fileData = [
            [
                'id',
                'created_at',
                'updated_at',
                'box_type',
                'title',
                'slug',
                'short_title',
                'marketing_description',
                'calories_kcal',
                'protein_grams',
                'fat_grams',
                'carbs_grams',
                'bulletpoint1',
                'bulletpoint2',
                'bulletpoint3',
                'recipe_diet_type_id',
                'season',
                'base',
                'protein_source',
                'preparation_time_minutes',
                'shelf_life_days',
                'equipment_needed',
                'origin_country',
                'recipe_cuisine',
                'in_your_box',
                'gousto_reference'],
            [
                '1',
                '30/06/2015 17:58:00',
                '30/06/2015 17:58:00',
                'vegetarian',
                'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                'sweet-chilli-and-lime-beef-on-a-crunchy-fresh-noodle-salad',
                '',
                'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                '401',
                '12',
                '35',
                '0',
                '',
                '',
                '',
                'meat',
                'all',
                'noodles',
                'beef',
                '35',
                '4',
                'Appetite',
                'Great Britain',
                'asian',
                '',
                '59'
            ],
            [
                '2',
                '30/06/2015 17:58:00',
                '30/06/2015 17:58:00',
                'gourmet',
                'Tamil Nadu Prawn Masala',
                'tamil-nadu-prawn-masala',
                '',
                'Tamil Nadu is a state on the eastern coast of the southern tip of India. Curry from there is particularly famous and it\'s easy to see why. This one is brimming with exciting contrasting tastes from ingredients like chilli powder, coriander and fennel seed',
                '524',
                '12',
                '22',
                '0',
                'Vibrant & Fresh',
                'Warming, not spicy',
                'Curry From Scratch',
                'fish',
                'all',
                'pasta',
                'seafood',
                '40',
                '4',
                'Appetite',
                'Great Britain',
                'italian',
                'king prawns, basmati rice, onion, tomatoes, garlic, ginger, ground tumeric, red chilli powder, ground cumin, fresh coriander, curry leaves, fennel seeds',
                '58'
            ]
        ];
        $this->mCsv->writeFile($fileData, self::WRITE_CSV_FILE_PATH);
        $csvExpected = [
            [
                'id' => '1',
                'created_at' => '30/06/2015 17:58:00',
                'updated_at' => '30/06/2015 17:58:00',
                'box_type' => 'vegetarian',
                'title' => 'Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad',
                'slug' => 'sweet-chilli-and-lime-beef-on-a-crunchy-fresh-noodle-salad',
                'short_title' => '',
                'marketing_description' => 'Here we\'ve used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you\'re a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be',
                'calories_kcal' => '401',
                'protein_grams' => '12',
                'fat_grams' => '35',
                'carbs_grams' => '0',
                'bulletpoint1' => '',
                'bulletpoint2' => '',
                'bulletpoint3' => '',
                'recipe_diet_type_id' => 'meat',
                'season' => 'all',
                'base' => 'noodles',
                'protein_source' => 'beef',
                'preparation_time_minutes' => '35',
                'shelf_life_days' => '4',
                'equipment_needed' => 'Appetite',
                'origin_country' => 'Great Britain',
                'recipe_cuisine' => 'asian',
                'in_your_box' => '',
                'gousto_reference' => '59'
            ],
            [
                'id' => '2',
                'created_at' => '30/06/2015 17:58:00',
                'updated_at' => '30/06/2015 17:58:00',
                'box_type' => 'gourmet',
                'title' => 'Tamil Nadu Prawn Masala',
                'slug' => 'tamil-nadu-prawn-masala',
                'short_title' => '',
                'marketing_description' => 'Tamil Nadu is a state on the eastern coast of the southern tip of India. Curry from there is particularly famous and it\'s easy to see why. This one is brimming with exciting contrasting tastes from ingredients like chilli powder, coriander and fennel seed',
                'calories_kcal' => '524',
                'protein_grams' => '12',
                'fat_grams' => '22',
                'carbs_grams' => '0',
                'bulletpoint1' => 'Vibrant & Fresh',
                'bulletpoint2' => 'Warming, not spicy',
                'bulletpoint3' => 'Curry From Scratch',
                'recipe_diet_type_id' => 'fish',
                'season' => 'all',
                'base' => 'pasta',
                'protein_source' => 'seafood',
                'preparation_time_minutes' => '40',
                'shelf_life_days' => '4',
                'equipment_needed' => 'Appetite',
                'origin_country' => 'Great Britain',
                'recipe_cuisine' => 'italian',
                'in_your_box' => 'king prawns, basmati rice, onion, tomatoes, garlic, ginger, ground tumeric, red chilli powder, ground cumin, fresh coriander, curry leaves, fennel seeds',
                'gousto_reference' => '58'
            ]
        ];
        $csvActual = $this->mCsv->readFile(self::WRITE_CSV_FILE_PATH);
        $this->assertEquals($csvExpected, $csvActual);
    }

}
