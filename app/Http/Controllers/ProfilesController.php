<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Hash;
use Validator;


class ProfilesController extends Controller
{
	public function __construct(){

        $this->middleware('auth');
        $this->Profile = new Profile;
    }

    public function profile(Request $request){


        if($request->ajax()) {
            return view('profile')->renderSections()['content'];
        }

        return view('profile');
    }

    public function settings(){
    	return view('settings');
    }

    public function changeprofile(Request $request){

       $validator = validator::make($request->all(),[
        'contact_num' => 'required|min:10|max:20',
    ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        
        }
    $this->Profile->changeProfile($request);
    return redirect()->back()->with("success","Profile Details changed successfully!");

}


    public function editprofilePic(Request $request){
        $validator = validator::make($request->all(),[
            'avatar' => 'mimes:jpeg,jpg,png|required|max:8192',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();

        }
        $this->Profile->updateProfilePic($request);
        return redirect()->back()->with("success","Profile Picture changed successfully!");
    }

//change pass
    public function changePassword(Request $request){

    	if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        $this->Profile->changepass($request);
        // //Change Password
        // $user = Auth::user();
        // $user->password = bcrypt($request->get('new-password'));
        // $user->save();

        return redirect()->back()->with("success","Password changed successfully!");

    }
    

}
