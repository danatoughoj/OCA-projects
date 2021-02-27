<?php

namespace App\Http\Controllers;

use App\TrainingCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class manageCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.addCenter');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'center_name' => 'required|unique:training_centers',
            'center_location' => 'required',
            'center_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->center_image->getClientOriginalExtension();
        request()->center_image->move(public_path('images'), $imageName);

        $var = new TrainingCenter();
        $var->center_name = $request->input('center_name');
        $var->center_location = $request->input('center_location');
        $var->center_image = $imageName;
        $var->save();
        return redirect('admin/viewCenter')->with('success', 'Training center added successfully.');
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
        $center = TrainingCenter::find($id);
        return view('Admin.editCenter', compact('center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'center_name' => 'required',
            'center_location' => 'required',
            'center_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->center_image)){
            $center = TrainingCenter::find($id);
            $imageName= $center-> center_image;
            File::delete(public_path('images/'.$imageName));

            $imageName = time().'.'.request()->center_image->getClientOriginalExtension();
            request()->center_image->move(public_path('images'), $imageName);
        }
        else {
            $center = TrainingCenter::find($id);
            $imageName= $center-> center_image;
        }

        $center = TrainingCenter::find($id);
        $center->center_name =  $request->get('center_name');
        $center->center_location = $request->get('center_location');
        $center->center_image = $imageName;
        $center->save();

        return redirect('admin/viewCenter')->with('success', 'Training center updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $center = TrainingCenter::find($id);
        File::delete(public_path('images/'.$center->center_image));
        $center->delete();
        return back()->with('success', 'Training center deleted!');
    }
}
