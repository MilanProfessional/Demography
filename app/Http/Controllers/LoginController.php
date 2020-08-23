<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    public function index()
    {

            return view('admin.login');
        
    }

    public function signin(Request $request)
    {
    

          $users = DB::table('user')->get();
          var_dump($users);


        die;
    	$method = $request->method();

		if ($request->isMethod('post')) {

echo "yes";    		//print_r($request); die;
    		//return $request->all();
		}
    	
    }
}
