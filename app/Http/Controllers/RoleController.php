<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    //add forms
    function addform(){
        return view('role.add');
    }
}
