<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password; 
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
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
    public function deleteAccountForm()
    {
        return view('profile.delete');
    }

    // Handle the account deletion
    public function destroy(Request $request)
    {
        // Delete the authenticated user
        $user = Auth::user();
        $user->delete();

        Auth::logout();

        return redirect('/')->with('success', 'Your account has been deleted.');
    }


    public function updatePassword()
    {
        return view('profile.password');
    }

    public function updatePasswordSubmit(Request $request)
    {
        // Validate the current password and new password
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('dashboard.user')->with('success', 'Password updated successfully.');
    }
}
