<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\AdminModel;
use Illuminate\Http\Request;
use Validator;
use Auth;

class AdminController extends Controller
{
    public function __construct(){

        // $this->middleware('auth');
        $this->AdminModel = new AdminModel;
    }

    public function index()
    {
        return view('admin/AdminDashboard');
    }

    public function indexManageAdmins()
    {
        $admins = AdminModel::all();
        return view('admin/ManageAdmins')->with('admins', $admins);
    }

    public function indexManageSongwriters()
    {
        return view('admin/ManageSongwriters');
    }

    public function indexManageSongEntries()
    {
        return view('admin/ManageSongEntries');
    }

    public function createAdmin(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'admin_position',
            'email_address' => 'required',
            'contact_num' => 'required',
            'admin_icon',
            'admin_password' => 'required'
        ]);

        // if($validator->fails())
        // {
		// 	return back()->withErrors($validator)->withInput();
        // }
        
        $this->AdminModel->newAdmin($request);
        
        return redirect("manage_admins")->with("message", "New Admin added successfully!");
    }
}
