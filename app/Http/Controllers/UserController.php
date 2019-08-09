<?php

namespace App\Http\Controllers;

use App\Transformers\UserTransformer;
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

    }

    public function get(string $id)
    {

    }

    public function create()
    {

    }

    public function update(string $id)
    {

    }

    public function delete(string $id)
    {

    }
}
