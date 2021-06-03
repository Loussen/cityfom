<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Categories;

class CategoryController extends ApiController
{

    /**
     * all api
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $category = Categories::all();
        return $this->successResponse($category);
    }

}
