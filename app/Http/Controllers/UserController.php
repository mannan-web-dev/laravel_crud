<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($userId){
    dd('showing value....'.$userId);
    }
}
