<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;

use App\Models\Specialist;
use Illuminate\Http\Request;

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
        return view('administrator.addSpecialistCategory', compact('specialists'));
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
        //edit the specialist category form based on the id
        $specialist = Specialist::where('id', '=', $id)->first();
        $description = $specialist::where('id', '=', $id)->first();
        return view('administrator.editSpecialistCategory', compact('specialist', 'description'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialist  $specialist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialist $specialist)
    {
        //update the specialist category
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //update the specialist category
        $id = $request->id;
        Specialist::where('id', '=', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //redirect to the specialist category page with a success message
        return redirect()->back()->with('success', 'Specialist Category Updated Successfully');
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
