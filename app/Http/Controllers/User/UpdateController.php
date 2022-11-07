<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use League\CommonMark\Extension\FrontMatter\Listener\FrontMatterPostRenderListener;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user){
        $data = $request->validated();
        $user->update($data);
        $user = $user->fresh();

        return new UserResource($user);

        //return redirect()->route('employees.show', $employee->id);
    }
}
