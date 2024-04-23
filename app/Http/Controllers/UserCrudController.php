<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\BinaryOp\Identical;

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

    public function showUsersById(Request $request, $id): View
    {

//        dd(User::findOrFail($id));
        return view('dashboard/crud/showUser', [
            'user' => User::findOrFail($id),
        ]);
    }
}
