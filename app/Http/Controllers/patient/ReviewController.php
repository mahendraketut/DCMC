<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\MedicalRecord;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::where('patient_id', auth()->user()->id)->where('status', 'completed')->get();
        $totalAppointments = Appointment::where('patient_id', auth()->user()->id)->where('status', 'completed')->count();
        $medicalrecords = MedicalRecord::all();
        $reviews = Review::all()->sortDesc();
        return view('patient.review', compact('appointments', 'medicalrecords', 'reviews', 'totalAppointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id = Crypt::decrypt($id);
        $review = Review::where('appointment_id', $id)->first();
        $appointment = Appointment::where('id', $id)->first();
        $patient = User::where('id', $appointment->patient_id)->first();
        $doctor = User::where('id', $appointment->doctor_id)->first();
        return view('patient.reviewDetail', compact('appointment', 'patient', 'doctor', 'review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreReviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReviewRequest $request)
    {
        $query = Review::create([
            'review_for_doctor' => $request->review_for_doctor,
            'review_for_clinic' => $request->review_for_clinic,
            'rating_for_doctor' => $request->rating_for_doctor,
            'rating_for_clinic' => $request->rating_for_clinic,
            'status' => 'active',
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'appointment_id' => $request->appointment_id,
        ]);
        return back()->with('success', 'Review added successfully, Thank you for your feedback!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReviewRequest  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
