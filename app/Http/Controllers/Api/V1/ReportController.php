<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Favourites;
use App\Models\NotificationsStore;
use App\Models\NotificationsStoreUsers;
use App\Models\ReportStore;
use App\Models\ReportType;
use Facade\FlareClient\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends ApiController
{
    /**
     * Report store api
     *
     * @return \Illuminate\Http\Response
     */
    public function typeList(Request $request)
    {
        $langs = config("global.langs");

        $validatedData = $request->validate([
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        $getTypes = ReportType::where('status',config("global.enable"))->first();

        if ($getTypes) {

            $responseData['name'] = $getTypes->{'name_' . $validatedData['language']};

            return $this->successResponse($responseData);
        }

        return $this->errorResponse('User not found', 404);
    }

    /**
     * Report type list api
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $langs = config("global.langs");
        $reportStatus = config("global.report_status");

        $reportStatus = array_flip($reportStatus);

        $user = Auth::user();

        $validatedData = $request->validate([
            'store_id' => 'required|numeric|exists:stores,id',
            'report_type_id' => 'required|numeric|exists:report_type,id',
            'reason' => 'sometimes|string|min:3',
            'language' => 'required|string|in:' . implode(",", $langs),
        ]);

        if($request->reason && $validatedData['reason']) {
            $request->reason = $validatedData['reason'];
            $getExistsReport = ReportStore::where('user_id',$user->id)->where('type_id',$validatedData['report_type_id'])->where('store_id',$validatedData['store_id'])->where('status','!=',$reportStatus['Closed'])->where('reason',trim($validatedData['reason']))->first();
        } else {
            $getExistsReport = ReportStore::where('user_id',$user->id)->where('type_id',$validatedData['report_type_id'])->where('store_id',$validatedData['store_id'])->where('status','!=',$reportStatus['Closed'])->first();
        }

        if($getExistsReport) {
            return $this->errorResponse('Already reported with this report type on this store.', 409);
        } else {
            $reportData = [
                'user_id' => $user->id,
                'store_id' => $validatedData['store_id'],
                'type_id' => $validatedData['report_type_id'],
                'reason' => $request->reason ? $validatedData['reason'] : null,
            ];

            ReportStore::create($reportData);
        }

        return $this->successResponse(null);
    }

}
