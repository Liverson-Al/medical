<?php

namespace App\Http\Controllers\User;

use App\Models\Occupation;
use App\Models\Role;
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

        if(in_array("occupation", $data)) {
            $occ = Occupation::where("Value", $data["occupation"])->first();
            $data["OccupationID"] = $occ["id"];
            unset($data["occupation"]);
        }


        if(in_array("birthdate", $data)) {
            $data["birthdate"] = date("Y-m-d",  $data["birthdate"] / 1000);
        }

        if(in_array("role", $data)) {
            $role = Role::where("Value", $data["role"])->first();
            $data["RoleID"] = $role["Value"];
            unset($data["role"]);
        }



        $user = User::where("id", $userID)->update($data);
        $user = User::find($userID);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


    }
}
