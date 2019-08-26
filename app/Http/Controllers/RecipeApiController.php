<?php

namespace App\Http\Controllers;

use App\Models\RecipeList;
use App\Services\Paginator\Paginator;
use App\Services\Csv\Csv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RecipeApiController extends Controller
{

    private $mRecipeList;
    private $mCsv;
    private const CSV_FILE_DIR = __DIR__ . '/../../../resources/apiData/recipe-data.csv';

    public function __construct(Csv $mCsv, RecipeList $recipeList)
    {
        $this->mRecipeList = $recipeList;
        $this->mCsv = $mCsv;

        $recipeApiData = $this->mCsv->readFile(self::CSV_FILE_DIR);
        $this->mRecipeList->createRecipeListFromArray($recipeApiData);
    }

    public function getRecipe($recipeId)
    {
        $recipe = $this->mRecipeList->getRecipeById($recipeId);
        if(empty($recipe)) {
            return [
             "Sorry, no recipe found."
            ];
        } else {
            return $recipe->getAllFields();
        }
    }

    public function getRecipesByCuisine($cuisine, Request $request, Paginator $paginator)
    {

        $pageNumber = intval($request->get('page'));
        $recipeList = $this->mRecipeList->getRecipesByCuisine($cuisine);
        return $paginator->paginateList($recipeList)->addLinks()->getPage($pageNumber);
    }

    public function updateRecipeFields(Request $request) {

        $validator = Validator::make($request->all(), [
            "id" => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }

        $this->mRecipeList->updateRecipeFields($request->all());
        $recipeList = $this->mRecipeList->toArray();
        $this->mCsv->writeFile($recipeList, self::CSV_FILE_DIR);
        return [
          'success'
        ];
    }

}
