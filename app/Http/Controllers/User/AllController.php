<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Http\Resources\User\ShortUserResource;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AllController extends BaseController
{
    public function __invoke(){
        $users = User::all();
        return UserResource::collection($users);
    }
}
