<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * @param $id
     * @return \Closure|string
     */
    public function show($id)
    {
        dd(User::find($id)->articles);
    }
}