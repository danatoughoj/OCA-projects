<?php

namespace App\Http\Controllers;

use App\Service;
use App\TrainingCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class manageServiceController extends Controller
{
    public function index()
    {
        $centers = TrainingCenter::all();
        return view('Admin.addService', compact('centers'));
    }

    public function store(Request $request)
    {
        request()->validate([
            'service_name' => 'required',
            'service_desc' => 'required|min:25',
            'service_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->service_image->getClientOriginalExtension();
        request()->service_image->move(public_path('images'), $imageName);
        $var = new Service();
        $var->service_name  = $request->input('service_name');
        $var->service_desc  = $request->input('service_desc');
        $var->service_type  = $request->input('service_type');
        $var->service_type  = $request->input('service_type');
        $var->service_price  = $request->input('service_price');
        $var->center_id     = $request->input('center_id');
        $var->service_image = $imageName;
        $var->save();
        return redirect('admin/viewService')->with('success', 'Service added successfully.');
    }

    public function edit($id)
    {
        $centers = TrainingCenter::all();
        $service = Service::find($id);
        return view('Admin.editService', compact('service', 'centers'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'service_desc' => 'required|min:25',
            'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->service_image)){
            $service = Service::find($id);
            $imageName= $service-> service_image;
            File::delete(public_path('images/'.$imageName));

            $imageName = time().'.'.request()->service_image->getClientOriginalExtension();
            request()->service_image->move(public_path('images'), $imageName);
        }
        else {
            $service = Service::find($id);
            $imageName= $service-> service_image;
        }

        $service = Service::find($id);
        $service->service_name  =  $request->get('service_name');
        $service->service_desc  = $request->get('service_desc');
        $service->service_type  = $request->get('service_price');
        $service->service_type  = $request->get('service_type');
        $service->center_id     =   $request->get('center_id');
        $service->service_image = $imageName;
        $service->save();

        return redirect('admin/viewService')->with('success', 'Service updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        File::delete(public_path('images/'.$service->service_image));
        $service->delete();
        return back()->with('success', 'Service deleted!');
    }
}
