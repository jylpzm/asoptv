<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use Validator;
use Auth;
class SongsController extends Controller
{
	public function __construct(){

		$this->middleware('auth');
		$this->Song = new Song;
	}

	public function submitsong(Request $request){

		$validator = validator::make($request->all(),[
			'audio_file' => 'required|mimes:audio/mp3',
			'audio_file' => 'required|mimes:mp3,mpga',
			'lyrics_file' => 'required|mimes:doc,docx',
			'captcha' => 'required|captcha'
		]);

		if($validator->fails()){
			return back()->withErrors($validator)->withInput();
		
		}
		$this->Song->submittedsong($request);


		return redirect("home")->with("message", "SUCCESSFULLY SUBMIT YOUR ENTRY");
	}

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
