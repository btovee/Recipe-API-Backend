<?php

namespace Tests\Unit;

use App\Models\Recipe;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class RecipeTest
 * @package Tests\Unit
 */
class RecipeTest extends TestCase
{

    /**
     * @var Recipe $mRecipe The recipe instance
     */
    private $mRecipe;

    /**
     * @var array $recipeDataSet The data set for testing
     */
    private $recipeDataSet = [
        "id" => "1",
        "created_at" => "30/06/2015 17:58:00",
        "updated_at" => "30/06/2015 17:58:00",
        "box_type" => "vegetarian",
        "title" => "Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad",
        "slug" => "sweet-chilli-and-lime-beef-on-a-crunchy-fresh-noodle-salad",
        "short_title" => "",
        "marketing_description" => "Here we've used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you're a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be",
        "calories_kcal" => "401",
        "protein_grams" => "12",
        "fat_grams" => "35",
        "carbs_grams" => "0",
        "bulletpoint1" => "",
        "bulletpoint2" => "",
        "bulletpoint3" => "",
        "recipe_diet_type_id" => "meat",
        "season" => "all",
        "base" => "noodles",
        "protein_source" => "beef",
        "preparation_time_minutes" => "35",
        "shelf_life_days" => "4",
        "equipment_needed" => "Appetite",
        "origin_country" => "Great Britain",
        "recipe_cuisine" => "asian",
        "in_your_box" => "",
        "gousto_reference" => "59"
    ];

    /**
     * Create a fresh instance before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->mRecipe = new Recipe();
        $this->mRecipe->setAllRecipeFieldsFromArray($this->recipeDataSet);
    }

    /**
     * Test for getBasicFields
     */
    public function testGetBasicFields(): void
    {
        $basicFieldsExpected = [
            'id' => "1",
            'title' => "Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad",
            'marketing_description' => "Here we've used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you're a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be",
        ];
        $basicFieldsActual = $this->mRecipe->getBasicFields();
        $this->assertEquals($basicFieldsExpected, $basicFieldsActual);
    }

    /**
     * Test for getAllFields
     */
    public function testGetAllFields(): void
    {
        $allFieldsExpected = $this->recipeDataSet;
        $allFieldsActual = $this->mRecipe->getAllFields();
        $this->assertEquals($allFieldsExpected, $allFieldsActual);
    }

    /**
     * Test for getAllFieldNames
     */
    public function testGetAllFieldNames(): void
    {
        $allFieldsNamesExpected = [
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
            'gousto_reference'
        ];
        $allFieldsNamesActual = $this->mRecipe->getAllFieldNames();
        $this->assertEquals($allFieldsNamesExpected, $allFieldsNamesActual);
    }

    /**
     * Test for getAllFieldValues
     */
    public function testGetAllFieldValues(): void
    {
        $allFieldsValuesExpected = [
            "1",
            "30/06/2015 17:58:00",
            "30/06/2015 17:58:00",
            "vegetarian",
            "Sweet Chilli and Lime Beef on a Crunchy Fresh Noodle Salad",
            "sweet-chilli-and-lime-beef-on-a-crunchy-fresh-noodle-salad",
            "",
            "Here we've used onglet steak which is an extra flavoursome cut of beef that should never be cooked past medium rare. So if you're a fan of well done steak, this one may not be for you. However, if you love rare steak and fancy trying a new cut, please be",
            "401",
            "12",
            "35",
            "0",
            "",
            "",
            "",
            "meat",
            "all",
            "noodles",
            "beef",
            "35",
            "4",
            "Appetite",
            "Great Britain",
            "asian",
            "",
            "59"
        ];
        $allFieldsValuesActual = $this->mRecipe->getAllFieldValues();
        $this->assertEquals($allFieldsValuesExpected, $allFieldsValuesActual);
    }

}
