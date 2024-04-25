<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\BinaryOp\Identical;
use Symfony\Component\HttpFoundation\RedirectResponse;

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

        return view('dashboard/crud/showUser', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function editUsers(Request $request, $id) : View
    {
        return view('dashboard/crud/editUsers', [
            'user' => User::findOrFail($id),
            'roles' => Role::all(),
        ]);
    }

    public function editUsersPost(ProfileUpdateRequest $request, $id): RedirectResponse
    {
        dd('123');
        $user = User::findOrFail($id);

        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('dashboard.crud.users')->with('status', 'profile-updated');
    }
    public function destroy()
    {
        dd('destroy user');
    }
}
