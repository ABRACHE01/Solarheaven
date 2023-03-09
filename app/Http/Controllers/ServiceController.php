<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{

    public function index()
    {
       
        $services = Service::with('images')->get();
        return response()->json($services);
    }

    public function store(StoreServiceRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'url' => 'required|image',
        ]);
        $image = $request->file('url');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/serviceImages');
        $image->move($destinationPath, $image_name);
    
        // Save the image URL 
        $imageModel = new Image();
        $imageModel->url = $image_name;
        $imageModel->save();
    
        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'admin_id' => $request->admin_id,
        ]);
    
        return response()->json([
            'service' => $service,
            'image' => $imageModel,
            'message' => 'Service created successfully'
        ], 201);
    }

    public function show(Service $service)
    {
        $service=Service::with('images')->find($service->id);
        return response()->json($service);

    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validatedData = $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'url' => 'image|required',
        ]);
    
        $service->fill($validatedData);
    
        $newImageModel = null;
    
        if ($request->hasFile('url')) {
            // delete old image
            $oldImageModel = $service->images()->first();
            if ($oldImageModel) {
                $oldImageUrl = public_path('images/serviceImages/'.$oldImageModel->url);
                if (file_exists($oldImageUrl)) {
                    unlink($oldImageUrl);
                }
                $oldImageModel->delete();
            }
    
            // upload new image
            $image = $request->file('url');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images/serviceImages');
            $image->move($destinationPath, $image_name);
            $newImageModel = new Image();
            $newImageModel->url = $image_name;
            $newImageModel->service_id = $service->id; // set service_id in the image table
            $newImageModel->save();
        }
    
        $service->save();
        return response()->json([
            'service' => $service,
            'image' => $newImageModel,
            'message' => 'service updated successfully'
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete();

        return response()->json([
            'message' => 'service deleted successfully'
        ]);
    }
}
