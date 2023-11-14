<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function index()
    {
        return view('backend.userRoles.user_role');
    }
}
