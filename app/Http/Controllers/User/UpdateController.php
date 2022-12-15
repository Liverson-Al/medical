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
        if(array_key_exists("city", $data) || array_key_exists("region", $data) || array_key_exists("placeOfWork", $data)) {
            $ClinicID = 1;

            unset($data["city"]);
            unset($data["region"]);
            unset($data["placeOfWork"]);

            $data['ClinicID'] = $ClinicID;
        }

        if(array_key_exists("occupation", $data)) {
            $occ = Occupation::where("Value", $data["occupation"])->first();
            $data["OccupationID"] = $occ["id"];
            unset($data["occupation"]);
        }

        if (array_key_exists("birthdate", $data)) {
            $data["birthdate"] = date("Y-m-d",  $data["birthdate"] / 1000);
        }
        if(array_key_exists("role", $data)) {
            $role = Role::where("Value", $data["role"])->first();
            $data["RoleID"] = $role["Value"];
            unset($data["role"]);
        }

        $user = User::where("id", $userID)->update($data);
        $user = User::find($userID);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


    }
}
