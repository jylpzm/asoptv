<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Hash;
use Auth;
class Profile extends Model
{
	protected $fillable =[
		'avatar',
	];

    public function changepass($request){

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

    }

    public function updateProfile($request){

    	$user = Auth::user();
    	// $displayphoto_path = $request->file('avatar')->store('avatar');

        $user->avatar = $request->file('avatar')->store('avatars');
    	$user->save();

    }
}
