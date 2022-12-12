<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Response;

class DeleteController extends BaseController
{
    public function __invoke($userID, Response $response){
        $user = User::find($userID);
        $user->delete();
        return $response->setStatusCode(204);
    }
}
