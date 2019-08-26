<?php


namespace App\Models;


/**
 * Class RecipeList
 * @package App\Models
 */
class RecipeList
{

    /**
     * @var array $recipes List of recipe objects from the CSV file
     */
    private $recipes = [];

    /**
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    /**
     * Retrieves the recipe object using recipe id
     *
     * @param string $recipeId The Recipe ID
     * @return Recipe
     */
    public function getRecipeById(string $recipeId): Recipe
    {
        foreach ($this->recipes as $recipe) {
            if ($recipe->getId() === $recipeId) {
                return $recipe;
            }
        }
        return null;
    }

    /**
     *  Retrieves a list of recipes each with the fields id, title and marketing_description.
     *
     * @param string $cuisine The cuisine type
     * @return array
     */
    public function getRecipesByCuisine(string $cuisine): array
    {
        $recipeList = [];
        foreach ($this->recipes as $recipe) {
            if ($recipe->getRecipeCuisine() === $cuisine) {
                $recipeList[] = $recipe->getBasicFields();
            }
        }
        return $recipeList;
    }

    /**
     * Updates the fields of a recipe by the recipe id
     *
     * @param array $updateFields
     */
    public function updateRecipeFields(array $updateFields): void
    {
        $recipe = $this->getRecipeById($updateFields['id']);
        if (!empty($updateFields['created_at'])) {
            $recipe->setCreatedAt($updateFields['created_at']);
        }

        if (!empty($updateFields['updated_at'])) {
            $recipe->setUpdatedAt($updateFields['updated_at']);
        }

        if (!empty($updateFields['box_type'])) {
            $recipe->setBoxType($updateFields['box_type']);
        }

        if (!empty($updateFields['title'])) {
            $recipe->setTitle($updateFields['title']);
        }

        if (!empty($updateFields['slug'])) {
            $recipe->setSlug($updateFields['slug']);
        }

        if (!empty($updateFields['short_title'])) {
            $recipe->setShortTitle($updateFields['short_title']);
        }

        if (!empty($updateFields['marketing_description'])) {
            $recipe->setMarketingDescription($updateFields['marketing_description']);
        }

        if (!empty($updateFields['calories_kcal'])) {
            $recipe->setCaloriesKcal($updateFields['calories_kcal']);
        }

        if (!empty($updateFields['protein_grams'])) {
            $recipe->setProteinGrams($updateFields['protein_grams']);
        }

        if (!empty($updateFields['fat_grams'])) {
            $recipe->setFatGrams($updateFields['fat_grams']);
        }

        if (!empty($updateFields['carbs_grams'])) {
            $recipe->setCarbsGrams($updateFields['carbs_grams']);
        }

        if (!empty($updateFields['bulletpoint1'])) {
            $recipe->setBulletpoint1($updateFields['bulletpoint1']);
        }

        if (!empty($updateFields['bulletpoint2'])) {
            $recipe->setBulletpoint2($updateFields['bulletpoint2']);
        }

        if (!empty($updateFields['bulletpoint3'])) {
            $recipe->setBulletpoint3($updateFields['bulletpoint3']);
        }

        if (!empty($updateFields['recipe_diet_type_id'])) {
            $recipe->setRecipeDietTypeId($updateFields['recipe_diet_type_id']);
        }

        if (!empty($updateFields['season'])) {
            $recipe->setSeason($updateFields['season']);
        }

        if (!empty($updateFields['base'])) {
            $recipe->setBase($updateFields['base']);
        }

        if (!empty($updateFields['protein_source'])) {
            $recipe->setProteinSource($updateFields['protein_source']);
        }

        if (!empty($updateFields['preparation_time_minutes'])) {
            $recipe->setPreparationTimeMinutes($updateFields['preparation_time_minutes']);
        }

        if (!empty($updateFields['shelf_life_days'])) {
            $recipe->setShelfLifeDays($updateFields['shelf_life_days']);
        }

        if (!empty($updateFields['equipment_needed'])) {
            $recipe->setEquipmentNeeded($updateFields['equipment_needed']);
        }

        if (!empty($updateFields['origin_country'])) {
            $recipe->setOriginCountry($updateFields['origin_country']);
        }

        if (!empty($updateFields['recipe_cuisine'])) {
            $recipe->setRecipeCuisine($updateFields['recipe_cuisine']);
        }

        if (!empty($updateFields['in_your_box'])) {
            $recipe->setInYourBox($updateFields['in_your_box']);
        }

        if (!empty($updateFields['gousto_reference'])) {
            $recipe->setGoustoReference($updateFields['gousto_reference']);
        }

    }

    /**
     * Creates the recipe Object list from the CSV array
     *
     * @param array $recipeData
     */
    public function createRecipeListFromArray(array $recipeData): void
    {
        foreach ($recipeData as $recipeDatum) {
            $oRecipe = new Recipe();
            $oRecipe->setId($recipeDatum['id']);
            $oRecipe->setCreatedAt($recipeDatum['created_at']);
            $oRecipe->setUpdatedAt($recipeDatum['updated_at']);
            $oRecipe->setBoxType($recipeDatum['box_type']);
            $oRecipe->setTitle($recipeDatum['title']);
            $oRecipe->setSlug($recipeDatum['slug']);
            $oRecipe->setShortTitle($recipeDatum['short_title']);
            $oRecipe->setMarketingDescription($recipeDatum['marketing_description']);
            $oRecipe->setCaloriesKcal($recipeDatum['calories_kcal']);
            $oRecipe->setProteinGrams($recipeDatum['protein_grams']);
            $oRecipe->setFatGrams($recipeDatum['fat_grams']);
            $oRecipe->setCarbsGrams($recipeDatum['carbs_grams']);
            $oRecipe->setBulletpoint1($recipeDatum['bulletpoint1']);
            $oRecipe->setBulletpoint2($recipeDatum['bulletpoint2']);
            $oRecipe->setBulletpoint3($recipeDatum['bulletpoint3']);
            $oRecipe->setRecipeDietTypeId($recipeDatum['recipe_diet_type_id']);
            $oRecipe->setSeason($recipeDatum['season']);
            $oRecipe->setBase($recipeDatum['base']);
            $oRecipe->setProteinSource($recipeDatum['protein_source']);
            $oRecipe->setPreparationTimeMinutes($recipeDatum['preparation_time_minutes']);
            $oRecipe->setShelfLifeDays($recipeDatum['shelf_life_days']);
            $oRecipe->setEquipmentNeeded($recipeDatum['equipment_needed']);
            $oRecipe->setOriginCountry($recipeDatum['origin_country']);
            $oRecipe->setRecipeCuisine($recipeDatum['recipe_cuisine']);
            $oRecipe->setInYourBox($recipeDatum['in_your_box']);
            $oRecipe->setGoustoReference($recipeDatum['gousto_reference']);
            $this->addRecipe($oRecipe);
        }
    }

    /**
     * Adds a Recipe object to the object list
     *
     * @param Recipe $recipe
     */
    public function addRecipe(Recipe $recipe): void
    {
        $this->recipes[] = $recipe;
    }

    /**
     * Parses the recipe object list to a array for CSV export
     *
     * @return array
     */
    public function toArray(): array
    {
        $recipeList = [];
        foreach ($this->recipes as $key => $recipe) {
            if ($key === array_key_first($this->recipes)) {
                $recipeList[] = $recipe->getAllFieldNames();
            }
            $recipeList[] = $recipe->getAllFieldValues();
        }
        return $recipeList;
    }
}
