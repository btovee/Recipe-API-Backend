<?php


namespace App\Models;


/**
 * Class Recipe
 * @package App\Models
 */
class Recipe
{

    /**
     * @var string $id The id field
     */
    private $id = "";

    /**
     * @var string $created_at The created_at field
     */
    private $created_at = "";

    /**
     * @var string $updated_at The updated_at field
     */
    private $updated_at = "";

    /**
     * @var string $box_type The box_type field
     */
    private $box_type = "";

    /**
     * @var string $title The title field
     */
    private $title = "";

    /**
     * @var string $slug The slug field
     */
    private $slug = "";

    /**
     * @var string $short_title The short_title field
     */
    private $short_title = "";

    /**
     * @var string $marketing_description The marketing_description field
     */
    private $marketing_description = "";

    /**
     * @var string $calories_kcal The calories_kcal field
     */
    private $calories_kcal = "";

    /**
     * @var string $protein_grams The protein_grams field
     */
    private $protein_grams = "";

    /**
     * @var string $fat_grams The fat_grams field
     */
    private $fat_grams = "";

    /**
     * @var string $carbs_grams The carbs_grams field
     */
    private $carbs_grams = "";

    /**
     * @var string $bulletpoint1 The bulletpoint1 field
     */
    private $bulletpoint1 = "";

    /**
     * @var string $bulletpoint2 The bulletpoint2 field
     */
    private $bulletpoint2 = "";

    /**
     * @var string $bulletpoint3 The bulletpoint3 field
     */
    private $bulletpoint3 = "";

    /**
     * @var string $recipe_diet_type_id The recipe_diet_type_id field
     */
    private $recipe_diet_type_id = "";

    /**
     * @var string $season The season field
     */
    private $season = "";

    /**
     * @var string $base The base field
     */
    private $base = "";

    /**
     * @var string $protein_source The protein_source field
     */
    private $protein_source = "";

    /**
     * @var string $preparation_time_minutes The preparation_time_minutes field
     */
    private $preparation_time_minutes = "";

    /**
     * @var string $shelf_life_days The shelf_life_days field
     */
    private $shelf_life_days = "";

    /**
     * @var string $equipment_needed The equipment_needed field
     */
    private $equipment_needed = "";

    /**
     * @var string $origin_country The origin_country field
     */
    private $origin_country = "";

    /**
     * @var string $recipe_cuisine The recipe_cuisine field
     */
    private $recipe_cuisine = "";

    /**
     * @var string $in_your_box The in_your_box field
     */
    private $in_your_box = "";

    /**
     * @var string $gousto_reference The gousto_reference field
     */
    private $gousto_reference = "";

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return string
     */
    public function getBoxType(): string
    {
        return $this->box_type;
    }

    /**
     * @param string $box_type
     */
    public function setBoxType(string $box_type): void
    {
        $this->box_type = $box_type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getShortTitle(): string
    {
        return $this->short_title;
    }

    /**
     * @param string $short_title
     */
    public function setShortTitle(string $short_title): void
    {
        $this->short_title = $short_title;
    }

    /**
     * @return string
     */
    public function getMarketingDescription(): string
    {
        return $this->marketing_description;
    }

    /**
     * @param string $marketing_description
     */
    public function setMarketingDescription(string $marketing_description): void
    {
        $this->marketing_description = $marketing_description;
    }

    /**
     * @return string
     */
    public function getCaloriesKcal(): string
    {
        return $this->calories_kcal;
    }

    /**
     * @param string $calories_kcal
     */
    public function setCaloriesKcal(string $calories_kcal): void
    {
        $this->calories_kcal = $calories_kcal;
    }

    /**
     * @return string
     */
    public function getProteinGrams(): string
    {
        return $this->protein_grams;
    }

    /**
     * @param string $protein_grams
     */
    public function setProteinGrams(string $protein_grams): void
    {
        $this->protein_grams = $protein_grams;
    }

    /**
     * @return string
     */
    public function getFatGrams(): string
    {
        return $this->fat_grams;
    }

    /**
     * @param string $fat_grams
     */
    public function setFatGrams(string $fat_grams): void
    {
        $this->fat_grams = $fat_grams;
    }

    /**
     * @return string
     */
    public function getCarbsGrams(): string
    {
        return $this->carbs_grams;
    }

    /**
     * @param string $carbs_grams
     */
    public function setCarbsGrams(string $carbs_grams): void
    {
        $this->carbs_grams = $carbs_grams;
    }

    /**
     * @return string
     */
    public function getBulletpoint1(): string
    {
        return $this->bulletpoint1;
    }

    /**
     * @param string $bulletpoint1
     */
    public function setBulletpoint1(string $bulletpoint1): void
    {
        $this->bulletpoint1 = $bulletpoint1;
    }

    /**
     * @return string
     */
    public function getBulletpoint2(): string
    {
        return $this->bulletpoint2;
    }

    /**
     * @param string $bulletpoint2
     */
    public function setBulletpoint2(string $bulletpoint2): void
    {
        $this->bulletpoint2 = $bulletpoint2;
    }

    /**
     * @return string
     */
    public function getBulletpoint3(): string
    {
        return $this->bulletpoint3;
    }

    /**
     * @param string $bulletpoint3
     */
    public function setBulletpoint3(string $bulletpoint3): void
    {
        $this->bulletpoint3 = $bulletpoint3;
    }

    /**
     * @return string
     */
    public function getRecipeDietTypeId(): string
    {
        return $this->recipe_diet_type_id;
    }

    /**
     * @param string $recipe_diet_type_id
     */
    public function setRecipeDietTypeId(string $recipe_diet_type_id): void
    {
        $this->recipe_diet_type_id = $recipe_diet_type_id;
    }

    /**
     * @return string
     */
    public function getSeason(): string
    {
        return $this->season;
    }

    /**
     * @param string $season
     */
    public function setSeason(string $season): void
    {
        $this->season = $season;
    }

    /**
     * @return string
     */
    public function getBase(): string
    {
        return $this->base;
    }

    /**
     * @param string $base
     */
    public function setBase(string $base): void
    {
        $this->base = $base;
    }

    /**
     * @return string
     */
    public function getProteinSource(): string
    {
        return $this->protein_source;
    }

    /**
     * @param string $protein_source
     */
    public function setProteinSource(string $protein_source): void
    {
        $this->protein_source = $protein_source;
    }

    /**
     * @return string
     */
    public function getPreparationTimeMinutes(): string
    {
        return $this->preparation_time_minutes;
    }

    /**
     * @param string $preparation_time_minutes
     */
    public function setPreparationTimeMinutes(string $preparation_time_minutes): void
    {
        $this->preparation_time_minutes = $preparation_time_minutes;
    }

    /**
     * @return string
     */
    public function getShelfLifeDays(): string
    {
        return $this->shelf_life_days;
    }

    /**
     * @param string $shelf_life_days
     */
    public function setShelfLifeDays(string $shelf_life_days): void
    {
        $this->shelf_life_days = $shelf_life_days;
    }

    /**
     * @return string
     */
    public function getEquipmentNeeded(): string
    {
        return $this->equipment_needed;
    }

    /**
     * @param string $equipment_needed
     */
    public function setEquipmentNeeded(string $equipment_needed): void
    {
        $this->equipment_needed = $equipment_needed;
    }

    /**
     * @return string
     */
    public function getOriginCountry(): string
    {
        return $this->origin_country;
    }

    /**
     * @param string $origin_country
     */
    public function setOriginCountry(string $origin_country): void
    {
        $this->origin_country = $origin_country;
    }

    /**
     * @return string
     */
    public function getRecipeCuisine(): string
    {
        return $this->recipe_cuisine;
    }

    /**
     * @param string $recipe_cuisine
     */
    public function setRecipeCuisine(string $recipe_cuisine): void
    {
        $this->recipe_cuisine = $recipe_cuisine;
    }

    /**
     * @return string
     */
    public function getInYourBox(): string
    {
        return $this->in_your_box;
    }

    /**
     * @param string $in_your_box
     */
    public function setInYourBox(string $in_your_box): void
    {
        $this->in_your_box = $in_your_box;
    }

    /**
     * @return string
     */
    public function getGoustoReference(): string
    {
        return $this->gousto_reference;
    }

    /**
     * @param string $gousto_reference
     */
    public function setGoustoReference(string $gousto_reference): void
    {
        $this->gousto_reference = $gousto_reference;
    }

    /**
     * Retrieves the fields id, title and description
     *
     * @return array
     */
    public function getBasicFields(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'marketing_description' => $this->marketing_description,
        ];
    }

    /**
     * Retrieves all the fields
     *
     * @return array
     */
    public function getAllFields(): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'box_type' => $this->box_type,
            'title' => $this->title,
            'slug' => $this->slug,
            'short_title' => $this->short_title,
            'marketing_description' => $this->marketing_description,
            'calories_kcal' => $this->calories_kcal,
            'protein_grams' => $this->protein_grams,
            'fat_grams' => $this->fat_grams,
            'carbs_grams' => $this->carbs_grams,
            'bulletpoint1' => $this->bulletpoint1,
            'bulletpoint2' => $this->bulletpoint2,
            'bulletpoint3' => $this->bulletpoint3,
            'recipe_diet_type_id' => $this->recipe_diet_type_id,
            'season' => $this->season,
            'base' => $this->base,
            'protein_source' => $this->protein_source,
            'preparation_time_minutes' => $this->preparation_time_minutes,
            'shelf_life_days' => $this->shelf_life_days,
            'equipment_needed' => $this->equipment_needed,
            'origin_country' => $this->origin_country,
            'recipe_cuisine' => $this->recipe_cuisine,
            'in_your_box' => $this->in_your_box,
            'gousto_reference' => $this->gousto_reference
        ];
    }

    /**
     * Retrieves all field names
     *
     * @return array
     */
    public function getAllFieldNames(): array {
        return [
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
    }

    /**
     * Retrieves all field values
     *
     * @return array
     */
    public function getAllFieldValues(): array {
        return [
            $this->id,
            $this->created_at,
            $this->updated_at,
            $this->box_type,
            $this->title,
            $this->slug,
            $this->short_title,
            $this->marketing_description,
            $this->calories_kcal,
            $this->protein_grams,
            $this->fat_grams,
            $this->carbs_grams,
            $this->bulletpoint1,
            $this->bulletpoint2,
            $this->bulletpoint3,
            $this->recipe_diet_type_id,
            $this->season,
            $this->base,
            $this->protein_source,
            $this->preparation_time_minutes,
            $this->shelf_life_days,
            $this->equipment_needed,
            $this->origin_country,
            $this->recipe_cuisine,
            $this->in_your_box,
            $this->gousto_reference
        ];
    }
}
