<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Response $response){

        $request->validated();
        $user = new User();
        $user->fill($request->all($user->getFillable()));
        $user->password = Hash::make($request->get('password'));
        $user->saveOrFail();
        //$user = Hash::make($data->password);
        //$this->service->store($employee); - через baseController и Service, но чёт не работает
        return $response->setStatusCode(201);


        //return redirect()->route('employees.index');


    }
}
