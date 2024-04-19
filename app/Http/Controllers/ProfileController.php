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
use Jenssegers\Agent\Agent;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     */


    public function showProfile(Request $request): View
    {
        return view('profile/showProfile', [
            'user' => $request->user(),
        ]);
    }

    public function showUsers(Request $request): View
    {
        return view('profile/showProfile', [
            'users' => $request->user(),
        ]);
    }


    public function showSession(Request $request): View
    {
        $agent = new Agent();


        // Get the IP address and user agent from the request
        $ipAddress = $request->ip();
        $userAgent = $request->userAgent();

        // Add data to the session
        session()->put('created_at', now());
        session()->put('ip_address', $ipAddress);
        session()->put('user_agent', $userAgent);

        // Get all session data
        $sessionData = session()->all();

//        dd($sessionData); // You can uncomment this line to see all session data

        return view('profile/showUserSessions', [
            'user' => $request->user(),
            'session' => $sessionData,
            'isDesktop' => $agent->isDesktop(),
        ]);
    }




//Fonction qui appelle le modele

//    public function showSession(Request $request): View
//    {
//
////        dd(Session::all());
//
////        Session::push('created_at', now());
//
//        return view('profile/showUserSessions', [
//
//            'user' => $request->user(),
//
//            'sessions' => Session::all(),
//        ]);
//    }
//


//    public function edit(Request $request): View
//    {
//        return view('profile.edit', [
//            'user' => $request->user(),
//        ]);
//    }


    public function editPassword(Request $request): View
    {
        return view('profile/passwordUpdate', [
            'user' => $request->user(),
        ]);
    }

    public function editEmail(Request $request): View
    {
        return view('profile/emailUpdateForm', [
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

        return Redirect::route('dashboard')->with('status', 'profile-updated');
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
