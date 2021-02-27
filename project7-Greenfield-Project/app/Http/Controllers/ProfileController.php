<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Public.profile');
    }

    public function edit($id)
    {

        return view('Public.profileEdit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_name' => ['nullable', 'string', 'max:255'],
            'user_number' => ['required',  'max:14', 'min:10'],
            'national_id' => ['digits:10'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'user_age' => ['gte:18'],
            'user_password' => ['required', 'string', 'min:4'],
            'user_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        $user =  User::find($id);
        if (!empty(request()->user_image)) {
            $imageName = time() . '.' . request()->user_image->getClientOriginalExtension();
            request()->user_image->move(public_path('images'), $imageName);
        } else {
            $imageName = $user->user_image;
        }
        $user->user_name =  $request->get('user_name');
        $user->user_number = $request->get('user_number');
        $user->national_id = $request->get('national_id');
        $user->email = $request->get('email');
        $user->user_age = $request->get('user_age');
        $user->password = $request->get('user_password');
        $user->user_image = $imageName;
        $user->save();

        return redirect('user/profile/account')->with('success', 'Profile updated!');
    }
}
