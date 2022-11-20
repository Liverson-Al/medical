<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Resources\User\UserResource;
use App\Models\Clinic;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends BaseController
{
    public function __invoke(Request $request, Response $response){

        //$request->except(['region', 'city', 'placeOfWork']);
        $request->merge(['ClinicID' => 1]);
        //$request->except(['region', 'city', 'placeofwork']);
        //dd($rq);
        //$request->validate([]);

        //$clinic = Clinic::where("Name", "=", $request->placeofwork)->first();
        $user = new User();
        $user->fill([

        ]);
        //$user->fill($request->except(['region', 'city', 'placeOfWork']));
        $user->fill($request->all());
        $user->password = Hash::make($request->get('password'));
        $user->saveOrFail();
        //$user = Hash::make($data->password);
        //$this->service->store($employee); - через baseController и Service, но чёт не работает
        return $response->setStatusCode(201);


        //return redirect()->route('employees.index');


    }
}
