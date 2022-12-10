<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(Request $request, $userID, Response $response){
        $user = User::where("id", $userID)->update($request->all());
        $user = User::find($userID);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


    }
}
