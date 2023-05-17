<?php

namespace App\Http\Controllers\administrator;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services =  Service::all();
        return view('administrator.services', compact('services'));
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
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|unique:services,service_name',
            'price' => 'required|numeric',
            'description' => 'max:255',
        ]);

        $config = [
            'table' => 'services',
            'field' => 'service_id',
            'length' => 8,
            'prefix' => 'SRV'
        ];

        $serviceid = IdGenerator::generate($config);

        $service = Service::create([
            'service_id' => $serviceid,
            'service_name' => $request->service_name,
            'price' => $request->price,
            'description' => $request->description,
            'created_at' => Carbon::now('Asia/Singapore'),
        ]);

        return back()->with('success', 'Service created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $services = Service::where('id', '=', $id)->first();
        return view('administrator.editService', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'service_name' => 'required',
            'price' => 'required|numeric',
            'description' => 'max:255',
        ]);

        Service::where('id', '=', $id)->update([
            'service_name' => $request->service_name,
            'price' => $request->price,
            'description' => $request->description,
            'updated_at' => Carbon::now('Asia/Singapore'),
        ]);

        return redirect()->route('admin.services')->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        Service::where('id', '=', $id)->delete();
        return back()->with('success', 'Service deleted successfully.');
    }
}