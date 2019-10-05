<?php

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var UserTransformer */
    protected $transformer;

    public function __construct()
    {
        $this->transformer = new UserTransformer();
    }

    public function all()
    {
        $users = User::all();

        return fractal($users)->respond();
    }

    public function get(string $id)
    {
        $user = User::all()->first();

        return fractal($user)->respond();
    }

    public function create()
    {
        $user = User::all()->first();

        return fractal()->item($user)->respond();
    }

    public function update(string $id)
    {
        $user = User::all()->first();

        return fractal($user)->respond();
    }

    public function delete(string $id)
    {
        $user = User::all()->first();

        return fractal($user)->respond();
    }
}
