<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\TrainingCenter;
use Illuminate\Support\Facades\Auth;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy("created_at", "desc")->paginate(6);
        return view('Public.services', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $word = request()->search_input;
        $services = Service::where('service_name', 'like', "%$word%")->paginate(6);
        return view("Public.services", ['services' => $services, 'searched' => $word]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::where('service_id', $id)->first();
        $training_center = TrainingCenter::where('center_id', $service->center_id)->first();
        return view('Public.single_service', compact('service', 'training_center'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function book(Service $id)
    {
        $this->validate(request(), [
            'date' => 'required',
            'time' => 'required'
        ]);
        $id->users()->attach(Auth::id(), ['date' => request()->date, "time" => request()->time]);
        // session()->flash('message', 'Booked Successfully');
        return redirect()->back()->with('message', 'Booked Successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
