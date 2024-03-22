<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return User::all();
    }
}
