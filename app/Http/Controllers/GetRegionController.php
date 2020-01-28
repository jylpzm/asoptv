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
        return view('auth/register', compact('phregions'));

    }
//For fetching states
    public function getStates($id)
    {
        
        $states = DB::table("philippine_provinces")
       ->where("region_code",$id)
       ->pluck("province_description","province_code");
       return response()->json($states);
   }

    public function index(){

    }
}
