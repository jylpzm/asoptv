<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\AdminModel;
use App\User;
use App\Song;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct(){

        // $this->middleware('auth');
        $this->AdminModel = new AdminModel;
    }

    public function index()
    {
        $newEntries = DB::table('songs')
            ->join('users', 'users.user_id', '=', 'songs.user_id')
            ->select('users.*', 'songs.*')
            ->get();

        return view('admin/AdminDashboard')->with('newEntries', $newEntries);
    }

    public function indexAdminLogin()
    {
        return view('admin/admin_auth/admin_login');
    }

    public function indexManageAdmins()
    {
        $admins = AdminModel::all();
        return view('admin/ManageAdmins')->with('admins', $admins);
    }

    public function indexCreateNewAdmin()
    {
        return view('admin/CreateNewAdmin');
    }

    public function indexManageSongwriters()
    {
        $users = User::all();
        return view('admin/ManageSongwriters')->with('users', $users);
    }

    public function indexManageSongEntries()
    {
        $songs = DB::table('songs')
            ->join('users', 'users.user_id', '=', 'songs.user_id')
            ->select('users.*', 'songs.*')
            ->get();

        return view('admin/ManageSongEntries')->with('songs', $songs);
    }

    public function createAdmin(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'admin_position',
            'email_address' => 'required',
            'contact_num' => 'required',
            'admin_icon' => 'image|nullable|max:1999',
            'admin_password' => 'required'
        ]);

        // if($validator->fails())
        // {
		// 	return back()->withErrors($validator)->withInput();
        // }
        
        $this->AdminModel->newAdmin($request);
        
        return redirect("manage_admins")->with('success', 'New Admin added successfully!');
    }
}
