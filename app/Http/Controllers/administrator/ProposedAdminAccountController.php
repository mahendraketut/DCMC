<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\TempAdmin;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ProposedAdminAccountController extends Controller
{
    public function index()
    {
        $tempAdmins = TempAdmin::where('status', 'pending')->get();
        return view('administrator.proposed-admin', compact('tempAdmins'));
    }

    public function approve($id)
    {
        $config = [
            'table' => 'users',
            'field' => 'user_id',
            'length' => 10,
            'prefix' => 'ADM-' . date('YmdHis')
        ];

        TempAdmin::where('id', $id)->update(['status' => 'verified']);
        User::create([
            'user_id' => IdGenerator::generate($config),
            'name' => TempAdmin::where('id', $id)->first()->name,
            'email' => TempAdmin::where('id', $id)->first()->email,
            'password' => TempAdmin::where('id', $id)->first()->password,
            'role' => 'administrator'
        ]);
        return redirect()->back()->with('success', 'Account has been approved');
    }

    public function reject($id)
    {
        TempAdmin::where('id', $id)->update(['status' => 'rejected']);
        return redirect()->back();
    }
}