<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use App\Song;
use DataTables;
use DB;
use Auth;

class SubmissionsController extends Controller
{
        public function __construct()
    {

        $this->middleware('auth');
        $this->Submission = new Submission;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
      public function index(Request $request)
    {

      if($request->ajax())
      {
       $entries = Song::join('users', "songs.user_id", "=", "users.user_id")
       ->where('songs.user_id', Auth::user()->user_id)
       ->select('songs.*')
       ->get(); 
        return DataTables::of($entries)
        ->editColumn('status', function($entries){
          if ($entries->status == 0) return '<span style="color: gray; font-weight: bold">Waiting For Approval</span>';
          if ($entries->status == 1) return '<span style="color: blue; font-weight: bold">Processing</span>';
          if ($entries->status == 2) return '<span style="color: green; font-weight: bold">Approved</span>';
          if ($entries->status == 3) return '<span style="color: red; font-weight: bold">Not Approved</span>';

          
        })
        ->rawColumns(['status'])
        ->make(true);
        
      }

      return view('submissionhistory', compact('entries'));
}

   public function submissionhistory(){   
    
    return view('submissionhistory');
   }

   public function entries(){

    // $songs = DB::table('users')
    // ->join('songs', "users.user_id", "=", "songs.user_id")
    // ->select("songs.song_title", "users.user_id")
    // ->get();
    $entries = Song::join('users', "songs.user_id", "=", "users.user_id")
    ->where('songs.user_id', Auth::user()->user_id)
    ->get(); 
    // return $entries;
    if (request()->ajax()){
      $test = Datatables::of($entries)
            ->make();
    }
    return view('submissionhistory', compact('test'));
    // return view('submissionhistory')->("entries", $entries);
    // 
    // 
   }
   public function submit(){
    return view ('submission');
   }
}
