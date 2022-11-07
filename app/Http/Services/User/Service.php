<?php

namespace App\Http\Services\User;

use App\Models\User;

class Service
{
    public function store($user)
    {
        $user = User::create($user);
        return $user;
    }
    public function update()
    {

    }

}
