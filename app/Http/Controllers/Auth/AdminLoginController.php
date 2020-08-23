<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
//use AuthenticatesUsers;

class AdminLoginController extends Controller
{
	public function __construct()
	{           
		$this->middleware('guest:admin')->except('logout');
	}

    public function ShowLoginForm()
    {
        if(Auth::guard('admin')->check())
        {
            return redirect(route('admin.dashboard'));
        }
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	$this->validate($request, [
    			'email' =>'required|email',
    			'password' => 'required|min:6'
    		]);
    	
    	//$credentials = ['email'=>$request->email,'password'=>$request->password];
    	if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
    	{	
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
       // echo "aaa"; die;
        //dump($request); die;
        Auth::guard('admin')->logout();
        //$request->session()->flush();
        //$request->session()->regenerate();
        
        return redirect(route('admin.login'));
    }
}
