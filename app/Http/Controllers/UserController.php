<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class UserController extends Controller
{
    public function profile(){
    	return view('profile',array('user'=>Auth::user()));
    }
    public function update_profile(Request $request){
if($request->hasFile('dp')){
	$avatar=$request->file('dp');
	$filename=time().'.'.$avatar->getClientOriginalExtension();
	Image::make($avatar)->resize(300,300)->save(public_path('uploads/profile/'.$filename));
	$user=Auth::user();
	$user->image=$filename;
	$user->save();
    }
    return view('profile',array('user'=>Auth::user()));
}
}
