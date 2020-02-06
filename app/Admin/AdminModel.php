<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Auth;
use Hash;
class AdminModel extends Model
{
    protected $table = 'admins';
    protected $fillable = ['full_name','admin_position','email_address','contact_num','admin_icon','admin_password'];

    public function newAdmin($request){
        $admins = new AdminModel;
        $admins->full_name = $request->input('full_name');
        $admins->admin_position = $request->input('admin_position');
        $admins->email_address = $request->input('email_address');
        $admins->contact_num = $request->input('contact_num');
        $icon_path = $request->file('admin_icon')->store('public/images');
        $request->file('admin_icon')->store('public/images');
        $admins->admin_password = $request->input('admin_password');
        $admins->save();
       }
}
