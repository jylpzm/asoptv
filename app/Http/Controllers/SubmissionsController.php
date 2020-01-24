<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use DB;

class SubmissionsController extends Controller
{
        public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function index(Request $request)
    {
        if($request->ajax()) {
         return view('submission')->renderSections()['content'];
    }

        return view('submission');

   }

   public function submissionhistory(){
    return view('submissionhistory');
   }

   public function entries(){
        $entries= Submission::all();
        return view('submissionhistory', compact('songs'));
   }
}
