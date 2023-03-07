<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{

    public function index()
    {
        $service =service::all();
        return response()->json($service);
    }


    public function store(StoreServiceRequest $request)
    {
     
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
         ]);
            $service = Service::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'admin_id' => $request->admin_id,
            ]);
    
            return response()->json([
                'service' => $service,
                'message' => 'Service created successfully'
            ], 201);
     
     
    }

    public function show(Service $service)
    {
        return response()->json($service);
    }


    public function update(UpdateServiceRequest $request, Service $service)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
       ]);
        $service->update($request->all());

        return response()->json($service);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return response()->json([
            'message' => 'service deleted successfully'
        ]);
    }
}
