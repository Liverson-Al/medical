<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(Request $request, $userID, Response $response){
        $data = $request->all();
        if(in_array("region" || "placeOfWork" || "city", $data)) {
            $ClinicID = 1;
            unset($data["city"]);
            unset($data["region"]);
            unset($data["placeOfWork"]);
            $data['ClinicID'] = $ClinicID;
        }
        $user = User::where("id", $userID)->update($data);
        $user = User::find($userID);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


    }
}
