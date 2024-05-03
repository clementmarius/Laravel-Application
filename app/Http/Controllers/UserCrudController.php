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

        $users = User::all();
        ;

        return view('dashboard/crud/users', [
            'users' => User::orderBy("id","desc")->paginate(10),
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


    public function destroy(User $user):RedirectResponse
    {
        $user->deleteQuietly();

        return \redirect("dashboard/crud/users");
    }

    public function searchUsers(Request $request) {

        $search = $request->input('search');
        $results = User::where('email', 'like', "%$search%")->get();
//        $results->paginate(10);

        return view('components/userSearchTable', ['users' => $results]);
    }
}
