<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Http\Resources\V1\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends ApiController
{

    /**
     * All api
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $langs = config("global.langs");
        $apiKey = config("global.api_key");

        $validatedData = $request->validate([
            'filter' => 'sometimes|string|in:1,2',
            'api_key' => 'required|string|in:'.$apiKey,
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getCategories = DB::table('categories AS c')
            ->selectRaw('c.*, c.name_'.$validatedData['language'].' AS name')
            ->join('store_category AS sc','sc.category_id','=','c.id')
            ->join('stores AS s','s.id','=','sc.store_id');

        if($request->has('filter')) {
            $getCategories->where('c.filter','=',$validatedData['filter']);
        }

        $responseData = $getCategories->whereRaw('s.status = '.config("global.enable").' AND s.verified = '.config("global.enable").' AND c.status = '.config("global.enable"))->groupBy('c.id')->get();

        $responseData = CategoryResource::collection($responseData);

        return $this->successResponse($responseData);
    }

}
