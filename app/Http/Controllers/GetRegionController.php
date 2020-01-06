<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhilippineRegion;
use DB;


class GetRegionController extends Controller
{

     public function getRegion()
    {
        $phregions= PhilippineRegion::all();
        return view('profile', compact('phregions'));
        
    }
     public function getRegionRegister()
    {
        $phregions= PhilippineRegion::all();
        return view('Auth/register', compact('phregions'));
        
    }

//For fetching states
    public function getStates($id)
    {
        
        $states = DB::table("philippine_provinces")
       ->where("region_code",$id)
       ->pluck("province_description","province_code");
       return response()->json($states);
   }

//For fetching cities
    public function getCities($id)
    {
        $cities= DB::table("philippine_cities")
        ->where("province_code",$id)
        ->pluck("city_municipality_description","city_municipality_code");
        return response()->json($cities);
    }

    public function index(){
        $phregions= PhilippineRegion::all();
        return view('auth/register', compact('phregions'));
    }
}
