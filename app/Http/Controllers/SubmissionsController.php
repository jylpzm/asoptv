<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use App\Song;
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

        return view('submission');

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
    return view('submissionhistory', compact('entries'));
    // return view('submissionhistory')->("entries", $entries);
   }
}
