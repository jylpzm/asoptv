<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/AdminDashboard');
    }

    public function indexManageAdmins()
    {
        return view('admin/ManageAdmins');
    }

    public function indexCreateNewAdmin()
    {
        return view('admin/CreateNewAdmin');
    }

    public function indexManageSongwriters()
    {
        return view('admin/ManageSongwriters');
    }

    public function indexManageSongEntries()
    {
        return view('admin/ManageSongEntries');
    }
}
