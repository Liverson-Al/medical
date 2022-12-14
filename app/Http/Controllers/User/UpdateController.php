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
        if(in_array("region" || "residenseregion" || "city", $data)) {
            $ClinicID = 1;
            unset($data["clinic"]);
            unset($data["region"]);
            unset($data["residenseregion"]);
            $data['ClinicID'] = $ClinicID;
        }
        $user = User::where("id", $userID)->update($data);
        $user = User::find($userID);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


    }
}
