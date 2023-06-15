<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class ProfileController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/User-profile');
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit');
    // }

    public function update(Request $request)
    {
        $request->validate([
            'dob' => 'required|date',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'country_code' => 'required',
            'phone_no' => 'required',
        ]);

        UserProfile::where('user_id', Auth::id())->update([
            'date_of_birth' => $request->dob,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'country_code' => $request->country_code,
            'phone_number' => $request->phone_no,
        ]);

    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function store(Request $request)
    {
        try {

            $request->validate([
                'dob' => 'required|date',
                'country' => 'required',
                'city' => 'required',
                'address' => 'required',
                'postal_code' => 'required',
                'country_code' => 'required',
                'phone_no' => 'required',
            ]);

            $path = '';
            if ($request->hasFile('avatar')) {
                $request->validate([
                    'image' => 'mimes:png,jpg,jpeg,gif'
                ]);
                $path = $request->file('avatar')->store('User/Images', 'public');
            }
            UserProfile::create([
                'user_id' => Auth::id(),
                'date_of_birth' => $request->dob,
                'country' => $request->country,
                'city' => $request->city,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'country_code' => $request->country_code,
                'phone_number' => $request->phone_no,
                'avatar' => $request->path,
            ]);
            return Redirect::to('/dashboard');
        } catch (\Throwable $th) {
            return back();
        }
    }

    public function show()
    {
        $user = User::with('user_profile')->where('id', Auth::id())->first();
        return Inertia::render('User', [
            'user' => $user
        ]);
    }
}
