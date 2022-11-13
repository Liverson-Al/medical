<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke(User $user, Response $response){
        $user->delete();
        return $response->setStatusCode(204);
        //return redirect()->route('User.index');
    }
}
