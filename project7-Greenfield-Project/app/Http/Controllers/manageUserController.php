<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class manageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.addUser');
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
            'user_name' => 'required|min:4',
            'national_id' => 'required|unique:users|numeric|digits:10',
            'user_number' => 'required|unique:users|digits:10',
            'user_age' => 'required|numeric',
            'user_password' => 'required|min:6',
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->user_image)){
            $imageName = time().'.'.request()->user_image->getClientOriginalExtension();
            request()->user_image->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default.png';
        }


        $var = new User();
        $var->user_name = $request->input('user_name');
        $var->national_id = $request->input('national_id');
        $var->user_number = $request->input('user_number');
        $var->user_age = $request->input('user_age');
        $var->user_password = Hash::make($request->input('user_password'));
        $var->user_image = $imageName;
        $var->save();
        return redirect('admin/viewUser')->with('success', 'User created successfully.');
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
       //
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
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'User deleted!');
    }
}
