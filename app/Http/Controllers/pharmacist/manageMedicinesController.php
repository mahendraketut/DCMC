<?php

namespace App\Http\Controllers\pharmacist;

use App\Http\Controllers\Controller;
use App\Imports\MedicineImport;
use App\Imports\MedicinesImport;
use App\Models\MedicineCategory;
use App\Models\Medicines;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;


class manageMedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = MedicineCategory::all();
        $medicines = Medicines::all();
        return view('pharmacist.manageMedicines', compact('medicines', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = MedicineCategory::all();
        $medicines = Medicines::all();
        return view('pharmacist.manageMedicines', compact('categories', 'medicines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:medicines|max:255',
            'description' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required|gt:0',
            'category_id' => 'required',
            'status' => 'required',
            'expiry_date' => 'required',
            'manufacture_date' => 'required',
            'manufacture_company' => 'required',
            'dosage' => 'required|max:255',
            'side_effects' => 'required|max:255',
            'precautions' => 'required|max:255',
            'storage' => 'required|max:255',
            'how_to_use' => 'required',
            'how_it_works' => 'required|max:255',
        ]);

        $config = [
            'table' => 'medicines',
            'field' => 'medicine_id',
            'length' => 10,
            'prefix' => 'MED' . date('YmdHis')
        ];

        $medicine_id = IdGenerator::generate($config);


        $query = Medicines::create([
            'medicine_id' => $medicine_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'expiry_date' => $request->expiry_date,
            'manufacture_date' => $request->manufacture_date,
            'manufacture_company' => $request->manufacture_company,
            'generic_name' => $request->generic_name,
            'dosage' => $request->dosage,
            'side_effects' => $request->side_effects,
            'precautions' => $request->precautions,
            'storage' => $request->storage,
            'how_to_use' => $request->how_to_use,
            'how_it_works' => $request->how_it_works,
            'other_information' => $request->other_information,
            'composition' => $request->composition,
        ]);
        return redirect()->route('pharmacist.medicines')->with('success', 'Medicine added successfully');
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
        $id = Crypt::decrypt($id);
        $categories = MedicineCategory::all();
        $medicines = Medicines::find($id);
        return view('pharmacist.editMedicines', compact('medicines', 'categories'));
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
        //validate the request
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required|gt:0',
            'category_id' => 'required',
            'status' => 'required',
            'expiry_date' => 'required',
            'manufacture_date' => 'required',
            'manufacture_company' => 'required',
            'dosage' => 'required|max:255',
            'side_effects' => 'required|max:255',
            'precautions' => 'required|max:255',
            'storage' => 'required|max:255',
            'how_to_use' => 'required',
            'how_it_works' => 'required|max:255',
        ]);

        $id = $request->id;

        Medicines::where('id', '=', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'expiry_date' => $request->expiry_date,
            'manufacture_date' => $request->manufacture_date,
            'manufacture_company' => $request->manufacture_company,
            'generic_name' => $request->generic_name,
            'dosage' => $request->dosage,
            'side_effects' => $request->side_effects,
            'precautions' => $request->precautions,
            'storage' => $request->storage,
            'how_to_use' => $request->how_to_use,
            'how_it_works' => $request->how_it_works,
            'other_information' => $request->other_information,
            'composition' => $request->composition,
        ]);
        return redirect()->route('pharmacist.medicines')->with('success', 'Medicine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $query = Medicines::destroy($id);
        if (!$query) {
            return redirect()->route('pharmacist.medicines')->with('error', 'Medicine not deleted');
        } else {
            return redirect()->route('pharmacist.medicines')->with('success', 'Medicine deleted successfully');
        }
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new MedicinesImport, $file);
        return redirect()->route('pharmacist.medicines')->with('success', 'Medicines imported successfully');
    }
}