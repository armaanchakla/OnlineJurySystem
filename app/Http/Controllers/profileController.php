<?php

namespace App\Http\Controllers;
use Auth;
use Image;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function profile(){
    	return view ('frontView.profile.profile', array('user' => Auth::user() ));
    }

    public function updateAvatar(Request $request){

    	if ($request->hasfile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename =time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );

    		$user = Auth::user();
    		$user -> avatar =$filename;
    		$user -> save();
    	}
    	return view ('frontView.profile.profile', array('user' => Auth::user() ));
    }	
}