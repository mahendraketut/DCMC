<?php

namespace App\Http\Controllers\administrator;

use App\Models\User;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $schedule = Schedule::get();
        $doctor = User::where('role', '=', 'doctor')->get();
        return view('administrator.schedule', compact('schedule', 'doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $doctor = User::where('role', '=', 'doctor')->get();
        return view('administrator.schedule-add', compact('doctor'));
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
        $request->validate([
            'doctor_name' => 'required',
            'day' => 'required',
            'start_time' => 'unique:schedule,start_time,NULL,id,day,' . $request->day,
            'end_time' => 'unique:schedule,end_time,NULL,id,day,' . $request->day,

        ]);

        $query = DB::table('schedule')->insert([
            'doctor_id' => User::where('name', '=', $request->doctor_name)->first()->id,
            'doctor_name' => $request->doctor_name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'created_at' => Carbon::now(),
        ]);
        // return redirect()->route('admin.schedule')->with('success', 'Schedule Added Successfully');
        //redirect ro schedule page if success and stay on same page if not
        if ($query) {
            return redirect()->route('admin.schedule')->with('success', 'Schedule Added Successfully');
        } else {
            return redirect()->route('admin.schedule')->with('error', 'Schedule Added Failed');
        }
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
    public function edit($id)
    {
        //
        $data = Schedule::where('id', '=', $id)->first();
        $doctor = User::where('role', '=', 'doctor')->get();
        return view('administrator.schedule-update', compact('data', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'doctor_name' => 'required',
            'day' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $id = $request->id;

        Schedule::where('id', '=', $id)->update([
            'doctor_name' => $request->doctor_name,
            'day' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,

        ]);
        return redirect()->route('admin.schedule')->with('success', 'Schedule Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Schedule::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Schedule Deleted Successfully');
    }
}
