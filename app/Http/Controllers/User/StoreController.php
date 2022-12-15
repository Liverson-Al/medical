<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\Clinic;
use App\Models\Occupation;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class StoreController extends BaseController
{
    public function __invoke(Request $request, Response $response){

        $data = $request->all();
        $user = new User();
        $ClinicID = 1;

        $data["birthdate"] = date("Y-m-d", $data["birthdate"] / 1000);

        $data['ClinicID'] = $ClinicID;
        unset($data["clinic"]);
        unset($data["region"]);
        unset($data["residenseregion"]);

        $role = Role::where("Value", $data["role"])->first();
        $data["RoleID"] = $role["Value"];
        unset($data["role"]);

        $occ = Occupation::where("Value", $data["occupation"])->first();
        $data["OccupationID"] = $occ["id"];
        unset($data["occupation"]);

        $data["password"] = Hash::make($request->get('password'));
        $user->fill($data);
        $user->saveOrFail();

        return $response->setStatusCode(201);

    }
}
