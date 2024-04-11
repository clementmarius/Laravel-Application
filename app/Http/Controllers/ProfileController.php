<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     */


    public function showProfile(Request $request): View
    {

//        dd(User::query());
        dd(User::all());
        return view('profile/showProfile', [
            'user' => $request->user(),
        ]);
    }


    public function showSession(Request $request): View
    {

        dd(Session::all());

//        dd(auth()->user()->session()->orderBy('created_at', 'desc')->get());

//        dd(Session::query());



        return view('profile/showUserSessions', [

            'user' => $request->user(),

            'session' => $request->session()->only(['user_agent'])
        ]);
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function editEmail(Request $request): View
    {
        return view('profile/emailUpdateForm', [
            'user' => $request->user(),
        ]);
    }

    public function editPassword(Request $request): View
    {
        return view('profile/passwordUpdate', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        dd('Delete fonctionne :) bravooooo !!!!');
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


}
