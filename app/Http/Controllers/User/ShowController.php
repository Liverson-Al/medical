<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke($userID){
//        if ($userID == -1) {
//            $users = User::all();
//            return UserResource::collection($users);
//        }
        $user = User::find($userID);
        return new UserResource($user);
    }
}
