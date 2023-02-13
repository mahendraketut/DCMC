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
        $tempAdmins = TempAdmin::orderBy('created_at', 'desc')->get();
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
        return redirect()->back()->with('success', 'Account rejected');
    }

    public function autoDelete()
    {
        $tempAdmins = TempAdmin::where('status', 'rejected')->get();
        foreach ($tempAdmins as $tempAdmin) {
            $date = $tempAdmin->updated_at;
            $date = strtotime($date);
            $date = date('Y-m-d', $date);
            $date = strtotime($date);
            $date = strtotime("+1 month", $date);
            $date = date('Y-m-d', $date);
            $date = strtotime($date);
            $today = strtotime(date('Y-m-d'));
            if ($today > $date) {
                TempAdmin::where('id', $tempAdmin->id)->delete();
            }
        }
    }
}