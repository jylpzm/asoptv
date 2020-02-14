<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\AdminModel;
use Illuminate\Http\Request;
use App\User;
use App\Song;
use Validator;
use Auth;
use DataTables;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
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

    public function SongwriterDetails()
    {
      return view('admin/SongwriterDetails');
    }

    public function indexManageSongEntries(Request $request)
    {

        if($request->ajax())
      {
           $entries = Song::join('users', 'users.user_id', '=', 'songs.user_id')
           ->get(); 
            return DataTables::of($entries)
            ->editColumn('status', function($entries){
              if (empty($entries->contact_num)) return '<span style="color: gray; font-weight: bold">No Contact Number</span>';
            })
            ->rawColumns(['status'])
            ->make(true);
      }
      return view('admin/ManageSongEntries', compact('entries'));
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
