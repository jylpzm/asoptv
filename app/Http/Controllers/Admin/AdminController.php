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

//SONG ENTRY DETAILS
    public function songentrydetails($user_id)
    {
        $songentries = Song::join('users','songs.user_id', '=' , 'users.user_id')
        ->where('song_id',$user_id)
        ->get();

        // return $songentries;
        return view('admin/SongwriterDetails',compact('songentries'));
    }
//INDEXXXX
    public function indexManageSongEntries(Request $request)
    {

        if($request->ajax())
      {
           $entries = Song::join('users', 'users.user_id', '=', 'songs.user_id')
           ->get(); 
            return DataTables::of($entries)
            ->editColumn('first_name', function($entries){
            return $entries->first_name . " " . $entries->last_name;
            })
            ->editColumn('status', function($entries){
              if ($entries->status == 0) 
                {
                  return '<span style="color: gray; font-weight: bold">Waiting For Approval</span>';
                }
              else if ($entries->status == 1) {
                return '<span style="color: blue; font-weight: bold">Processing</span>';
              }
              else if ($entries->status == 2){
                return '<span style="color: green; font-weight: bold">Approved</span>';
              } else{
                  return '<span style="color: red; font-weight: bold">Not Approved</span>';
                }
              
      })
            ->addColumn('action', function($entries){
                $btn = '<center><a href="/songentry/detail/'.$entries->song_id.'" '.'class="edit btn btn-primary btn-sm">View Details</a></center>';
                return $btn;
            })->rawColumns(['action','status'])

            ->make(true);
      }
      return view('admin/ManageSongEntries', compact('entries'));
    }

//PENDING
    public function PendingEntries(Request $request)
    {   

        if($request->ajax())
      {
           $entries = Song::join('users', 'users.user_id', '=', 'songs.user_id')
            ->where('songs.status', '=', '0')
            ->get(); 
            return DataTables::of($entries)
            ->editColumn('first_name', function($entries){
                return $entries->first_name . " " . $entries->last_name;
            })
            ->editColumn('status', function($entries){
              if ($entries->status == 0) 
                {
                  return '<span style="color: gray; font-weight: bold">Waiting For Approval</span>';
                }
              else if ($entries->status == 1) {
                return '<span style="color: blue; font-weight: bold">Processing</span>';
              }
              else if ($entries->status == 2){
                return '<span style="color: green; font-weight: bold">Approved</span>';
              } else{
                  return '<span style="color: red; font-weight: bold">Not Approved</span>';
                }
      })
            ->addColumn('actions', function($row){
                $btn = '<center><a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View Details</a></center>';
                return $btn;
            })->rawColumns(['actions','status'])
            ->make(true);
      }
      return view('admin/PendingEntries', compact('entries'));
    }
//PROCESS
    public function ProcessingEntries(Request $request)
    {
        if($request->ajax())
      {
           $entries = Song::join('users', 'users.user_id', '=', 'songs.user_id')
            ->where('songs.status', '=', '1')
            ->get(); 
            return DataTables::of($entries)
            ->editColumn('first_name', function($entries){
                return $entries->first_name . " " . $entries->last_name;
            })
            ->editColumn('status', function($entries){
              if ($entries->status == 0) 
                {
                  return '<span style="color: gray; font-weight: bold">Waiting For Approval</span>';
                }
              else if ($entries->status == 1) {
                return '<span style="color: blue; font-weight: bold">Processing</span>';
              }
              else if ($entries->status == 2){
                return '<span style="color: green; font-weight: bold">Approved</span>';
              } else{
                  return '<span style="color: red; font-weight: bold">Not Approved</span>';
                }
      })
            ->addColumn('actions', function($row){
                $btn = '<center><a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View Details</a></center>';
                return $btn;
            })->rawColumns(['actions','status'])
            ->make(true);
      }
      return view('admin/ProcessingEntries', compact('entries'));
     }
//APPROVED
     public function ApprovedEntries(Request $request)
    {
        if($request->ajax())
      {
           $entries = Song::join('users', 'users.user_id', '=', 'songs.user_id')
            ->where('songs.status', '=', '2')
            ->get(); 
            return DataTables::of($entries)
            ->editColumn('first_name', function($entries){
                return $entries->first_name . " " . $entries->last_name;
            })
            ->editColumn('status', function($entries){
              if ($entries->status == 0) 
                {
                  return '<span style="color: gray; font-weight: bold">Waiting For Approval</span>';
                }
              else if ($entries->status == 1) {
                return '<span style="color: blue; font-weight: bold">Processing</span>';
              }
              else if ($entries->status == 2){
                return '<span style="color: green; font-weight: bold">Approved</span>';
              } else{
                  return '<span style="color: red; font-weight: bold">Not Approved</span>';
                }
      })
            ->addColumn('actions', function($row){
                $btn = '<center><a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View Details</a></center>';
                return $btn;
            })->rawColumns(['actions','status'])
            ->make(true);
      }
      return view('admin/ApprovedEntries', compact('entries'));
    }
//NONAPPROVED
    public function NonapprovedEntries(Request $request)
    {
        if($request->ajax())
      {
           $entries = Song::join('users', 'users.user_id', '=', 'songs.user_id')
            ->where('songs.status', '=', '3')
            ->get(); 
            return DataTables::of($entries)
            ->editColumn('first_name', function($entries){
                return $entries->first_name . " " . $entries->last_name;
            })
            ->editColumn('status', function($entries){
              if ($entries->status == 0) 
                {
                  return '<span style="color: gray; font-weight: bold">Waiting For Approval</span>';
                }
              else if ($entries->status == 1) {
                return '<span style="color: blue; font-weight: bold">Processing</span>';
              }
              else if ($entries->status == 2){
                return '<span style="color: green; font-weight: bold">Approved</span>';
              } else{
                  return '<span style="color: red; font-weight: bold">Not Approved</span>';
                }
      })
            ->addColumn('actions', function($row){
                $btn = '<center><a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View Details</a></center>';
                return $btn;
            })->rawColumns(['actions','status'])

            ->make(true);
      }

      return view('admin/NotApproved', compact('entries'));
    }

//APPROVAL OF ENTRIES FUNCTION
    public function approvalEntries(Request $request, $song_id){

        $validator = validator::make($request->all(),
            [
            "title" => "min:5|max:20|unique:articles",
            "content" => "min:5|max:500"
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $this->AdminModel->approvalEntries($request, $song_id);
        return redirect("manage_admins")->with('success', 'successfully');

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
