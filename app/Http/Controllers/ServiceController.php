<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:create-service')->only(['create', 'store']);
        $this->middleware('can:edit-service')->only(['edit', 'update']);
        $this->middleware('can:delete-service')->only(['destroy']);
    }
    public function index()
    {
        $services = Service::with('images','admin.user')->latest()->paginate(10);
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
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
    
        $service = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'admin_id' => Admin::where('user_id', Auth::user()->id)->first()->id, 
        ]);

        // Save the image URL 
        $imageModel = new Image();
        $imageModel->url = $image_name;
        $imageModel->service_id = $service->id;
        $imageModel->save();

        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    public function show(Service $service)
    {
        $service=Service::with('images')->find($service->id);
        return view('services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
      
    
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
        return redirect()->route('services.index')->with('success', 'Service updated successfully');
    }

    public function destroy(Service $service)
    {
            // delete image 
         
                $imageModel = $service->images()->first();

                if($imageModel == null){
                    $service->delete();
                }
                else{
                    $imageUrl = public_path('images/serviceImages/'.$imageModel->url);
                    if (file_exists($imageUrl)) {
                        unlink($imageUrl);
                    }
                    $imageModel->delete();
                    $service->delete();
                }

        return redirect()->route('services.index')->with('success', 'Service deleted successfully');


    }
}
