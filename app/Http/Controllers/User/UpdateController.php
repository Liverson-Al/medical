<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\CommonMark\Extension\FrontMatter\Listener\FrontMatterPostRenderListener;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user, Response $response){
        $data = $request->validated();
        $user->update($data);
        $user = $user->fresh();
        return $response->setStatusCode(202);

        //return redirect()->route('employees.show', $employee->id);
    }
}
