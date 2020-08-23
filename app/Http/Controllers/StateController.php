<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\states;


class StateController extends Controller
{
    public function index(Request $request)
    {
        $search_txt = $request->input('search_text');   // get search input
        $states = states::paginate(2);   // table results with pagination
        if($search_txt) 
        {
            // if there a search then condition
            $states = states::where('state_name', 'LIKE', '%'.$search_txt.'%')->paginate(2);  
            // appending parameter to pagination link
            $states->appends(['search_text' => $search_txt])->links();
        }
    	
    	return view('admin.viewstate',compact('states'));
    }

    public function showForm(Request $request)
    {
    	return view('admin.addstate');
    }

    public function add(Request $request)
    {
    	$states = new states();
    	if ($request->isMethod('post')) 
    	{
    		   $this->validate($request,[
    		   		'state_name'=>'required|unique:states'
    		   	]);
    		   $states->state_name = $request->state_name;
			   $states->no_of_district = $request->no_of_district;
			   $states->save();	
		}
		return redirect(route('admin.states'));
    }

    public function show($id)
    {
    	echo "<pre>"; print_r($id); die;
    	//echo $id; die;
    	//return view('admin.statedetail');
    }

    public function edit($id)
    {
        $stat = states::where('state_id',$id)->first(); 
       
        return view('admin.addstate',['stat'=>$stat,'action'=>'edit','id'=>$id]);
    }

    public function update(Request $request)
    {
        states::where('state_id',$request->id)
                ->update(['state_name' => $request->state_name, 'no_of_district' => $request->no_of_district]);
        return redirect('/admin/updatestate/'.$request->id);        
    }

   
}
