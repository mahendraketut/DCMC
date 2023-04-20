<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
// use League\OAuth1\Client\Server\User;s


class addSpecialistCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialists = Specialist::all();
        $doctors = User::where('role', '=', 'doctor')->get();
        return view('administrator.addSpecialistCategory', compact('specialists', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show the form for creating a new specialist category
        return view('administrator.addSpecialistCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //store the specialist category
        Specialist::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //redirect to the specialist category page with a success message
        return redirect()->route('admin.specialist')->with('success', 'Specialist Category Added Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id

     * Display the specified resource.
     *
     * @param  \App\Models\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function show(Specialist $specialist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialist  $specialist

     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        //edit the specialist category form based on the id
        $specialist = Specialist::where('id', '=', $id)->first();
        // $description = $specialist->description;

        return view('administrator.updatespecialist', compact('specialist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $id = ($request->id);
        //update the specialist category based on the id
        Specialist::where('id', '=', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //redirect to the specialist category page with a success message
        return redirect()->route('admin.specialist')->with('success', 'Specialist Category Updated Successfully');
        // return dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the specialist category based on the id
        Specialist::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Specialist Category Deleted Successfully');
    }
}
