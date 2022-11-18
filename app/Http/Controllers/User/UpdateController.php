<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $userID, Response $response){

        $data = $request->validated();
        $user = User::where('id', $userID)->update($data);
        $user = User::find($userID);
        //$user1 = $user->update($data);
        return $response->setStatusCode(202)->setContent(new UserResource($user));

        return UserResource::collection($user)->resolve();
        //return $response->setStatusCode(202);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


        //return $response->setStatusCode(202)->setContent(new AnthropometryResource($anthropometry));
        //return redirect()->route('employees.show', $employee->id);
        //return new AnthropometryResource($anthropometry);
    }
}
