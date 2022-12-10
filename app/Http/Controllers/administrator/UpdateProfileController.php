<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UpdateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('administrator.updateprofile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find(auth()->user()->id);
        return view('administrator.updateprofile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
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

        User::where('id', auth()->user()->id)
            ->update([
                'name' => $request->name,
                'username' => $request->username,
                'dob' => $request->dob,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'gender' => $request->gender,
                'profile_pic' => $profile_pic,
            ]);
        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    public function destroy(Request $request, User $user)
    {
        User::destroy(auth()->user()->id);
        return redirect()->route('login')->with('success', 'Account deleted successfully');
    }
}