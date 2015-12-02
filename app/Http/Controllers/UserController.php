<?php

namespace Bee\Http\Controllers;

use Bee\User;

use Bee\Http\Requests;
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