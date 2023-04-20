<?php

namespace App\Http\Controllers\pharmacist;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('pharmacist.updateprofile', compact('user'));
    }

    public function edit(User $user)
    {
        $user = User::find(auth()->user()->id);
        return view('pharmacist.updateprofile', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => ['required', 'regex:/^(?:\+?62|0?)\d{9,12}$/'],
            'address' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => ['required', 'regex:/^(?:\+?62|0?)\d{9,12}$/'],
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'profil_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|file|max:2048|dimensions:min_width=100,min_height=100',
        ]);

        $profile_pic = $request->profil_pic;
        if ($request->hasFile('profil_pic')) {
            // Storage::delete($user->profile_pic);
            $profile_pic = $request->file('profil_pic')->store('profile_pic');
        }

        $phoneNumber = $request->phone;

        if (preg_match('/^0/', $phoneNumber)) {
            $phoneNumber = preg_replace('/^0/', '+62', $phoneNumber);
        } elseif (preg_match('/^62/', $phoneNumber)) {
            $phoneNumber = preg_replace('/^62/', '+62', $phoneNumber);
        } elseif (preg_match('/^\+62/', $phoneNumber)) {
            $phoneNumber = $phoneNumber;
        } else {
            $phoneNumber = '+62' . $phoneNumber;
        }

        User::where('id', auth()->user()->id)
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'dob' => $request->dob,
                'email' => $request->email,
                'phone' => $phoneNumber,
                'address' => $request->address,
                'city' => $request->city,
                'gender' => $request->gender,
                'profile_pic' => $profile_pic,
            ]);
        return redirect()->route('pharmacist.profile')->with('success', 'Profile updated successfully');
    }

    public function destroy(Request $request, User $user)
    {
        User::destroy(auth()->user()->id);
        return redirect()->route('login')->with('success', 'Account deleted successfully');
    }
}
