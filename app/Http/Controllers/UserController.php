<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    public  function __construct()  
    {
        $this->middleware('auth');
    }

    //
    public function profile(){
        return view('profile', ['user' => Auth::user()]);
    }

    public function update_avatar(Request $request){


        // Handel the user uploads of avatars
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filname = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filname));

            $user = Auth::user();
            $user->avatar = $filname;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()));
    }
}
