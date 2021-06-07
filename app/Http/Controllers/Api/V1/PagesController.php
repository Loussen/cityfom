<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Models\CmsPages;
use Illuminate\Http\Request;

class PagesController extends ApiController
{
    /**
     * Get page all api
     *
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $getPage = CmsPages::where('status',config("global.enable"))->get();

        if ($getPage) {
            return $this->successResponse($getPage);
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Get page details api
     *
     * @return \Illuminate\Http\Response
     */
    public function detailsBySlug(Request $request)
    {
        $validatedData = $request->validate([
            'slug' => 'required|string|min:3|max:55',
        ]);

        $getPage = CmsPages::where('status',config("global.enable"))->where('slug',$validatedData['slug'])->first();

        if ($getPage) {
            return $this->successResponse($getPage);
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Get page details by language api
     *
     * @return \Illuminate\Http\Response
     */
    public function detailsByLangAndSlug(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'slug' => 'required|string|min:3|max:55',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getPage = CmsPages::where('status',config("global.enable"))->where('slug',$validatedData['slug'])->first();

        if ($getPage) {

            $responseData['content'] = $getPage->{'content_' . $validatedData['language']};

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('User not found', 404);
    }
}
