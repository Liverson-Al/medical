<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Response;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user, Response $response){
        $data = $request->validated();
        //$user->Name = $request->Name;
        $user->update($data);
        $user->save();
        return $user;
        //return $response->setStatusCode(202);
        return $response->setStatusCode(202)->setContent(new UserResource($user));


        //return $response->setStatusCode(202)->setContent(new AnthropometryResource($anthropometry));
        //return redirect()->route('employees.show', $employee->id);
        //return new AnthropometryResource($anthropometry);
    }
}
