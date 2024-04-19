<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserCrudController extends Controller
{
    public function showUsers(Request $request): View
    {


        return view('dashboard/crud/users', [
            'users' => User::all(),
//            'roles' => Role::all(),
//            'users' => User::find(1)->role;
        ]);
    }
}
