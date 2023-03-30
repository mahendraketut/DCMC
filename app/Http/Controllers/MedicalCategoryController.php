<?php

namespace App\Http\Controllers;

use App\Models\medicalCategory;
use App\Http\Requests\StoremedicalCategoryRequest;
use App\Http\Requests\UpdatemedicalCategoryRequest;

class MedicalCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoremedicalCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremedicalCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicalCategory  $medicalCategory
     * @return \Illuminate\Http\Response
     */
    public function show(medicalCategory $medicalCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicalCategory  $medicalCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(medicalCategory $medicalCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemedicalCategoryRequest  $request
     * @param  \App\Models\medicalCategory  $medicalCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemedicalCategoryRequest $request, medicalCategory $medicalCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicalCategory  $medicalCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicalCategory $medicalCategory)
    {
        //
    }
}
