<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Hash;
use Auth;
class Profile extends Model
{
	protected $fillable = ['user_id','first_name','last_name','avatar','dob','street_add', 'contact_num', ''];

    public function changepass($request){

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

    }

    public function changeProfile($request){

    	$user = Auth::user();
        $user->create($request->all());
    	$user->save();

    }

    public function updateProfilePic($request){
        $user = Auth::user();
        // $displayphoto_path = $request->file('avatar')->store('avatar');
        $request->file('avatar')->store('public/avatars');
        $user->avatar = $request->file('avatar')->hashName();
        $user->save();
    }
}
