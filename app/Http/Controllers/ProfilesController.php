<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use Hash;
use Validator;
use App\User;
use App\PhilippineRegion;
use App\PhilippineProvince;
use DB;

class ProfilesController extends Controller
{
	public function __construct(){

        $this->middleware('auth');
        $this->Profile = new Profile;
    }

    public function profile(){
        $phregions = DB::table('users')
        ->join('philippine_regions', "philippine_regions.region_code", "=", "users.region")
        ->join('philippine_provinces', "philippine_provinces.province_code", "=", "users.province")
        ->where('philippine_provinces.province_code', Auth::user()->province)
        ->where('philippine_regions.region_code', Auth::user()->region)
        ->select('philippine_provinces.province_description', 'philippine_regions.region_description')

        ->get();

        // $phregions = PhilippineRegion::join('users', "philippine_regions.region_code", "=", "users.region")
        // ->join('users', "philippine_provinces.province_code", "=", "users.province")
        // ->where('philippine_regions.region_code', Auth::user()->region)
        // ->select('philippine_regions.region_description')
        // ->get(); 
        // return $phregions;
        
        // $phprovinces = PhilippineProvince::join('users', "philippine_provinces.province_code", "=", "users.province")
        // ->where('philippine_provinces.province_code', Auth::user()->province)
        // ->select('philippine_provinces.province_description')
        // ->get(); 
        // return $phprovinces;
        // return $shares;
        return view('profile', compact("phregions"));
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
        return redirect()->back()->with("success","Password changed successfully!");

    }
    

}
