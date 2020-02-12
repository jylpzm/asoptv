<?php

namespace App\Http\Controllers\Admin\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showLoginForm()
    {
    	return view('admin/admin_auth/admin_login');
    }

    public function login(Request $request)
    {
    	//Validation
    	$this->validate($request, [
    		'email_address' => 'required|email',
    		'admin_password' => 'required|min:6'
    	]);

    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
    	{
    		return redirect()->intended(route('admin_dashboard'));
    	}

    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
