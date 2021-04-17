<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;


class UserController extends Controller
{
    function registration(Request $request)
    {
    	// echo "<pre>";
    	// print_r($request->post());
    	$id=$request->post("id");
    	if($id!=0)
    	{
    		$profile_picture_vali="mimes:jpg,png|max:100";
    	}
    	else
    	{
    		$profile_picture_vali="required|mimes:jpg,png|max:100";

    	}


    	$request->validate([
    		"name"=>"required|min:3",

    		"email"=>"required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",

    		"mobile_number"=>"required|numeric|digits:10",

    		"profile_picture"=>$profile_picture_vali,

    		"date_of_birth"=>"required",

    		"password"=>"required|min:6|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%@]).*$/",

    		"confirm_password"=>"same:password",

    	],
    	[
    		"password.regex"=>"password must conten atlest 1 alp 1 number 1 special symble"
    	]);


    	//validation end

    	if($id!=0)
    	{
    		$table=user::find($id);	
    		$request->session()->flash("message","Edit Saved");

    	}
    	else
    	{
    		$table   = new user;
    		$request->session()->flash("message","User Added");
    	}
    	
    	$table->name     = $request->post('name');
    	$table->email    = $request->post('email');
    	$table->mobile   = $request->post('mobile_number');
    	$table->b_date   = $request->post('date_of_birth');
    	$table->password = $request->post('password');

    	 if($request->hasfile('profile_picture'))
        {
            $image=$request->file('profile_picture');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('public/media',$image_name);
            $table->profile_img = $image_name;
        }

        if(!$table->save())
        {
        	$request->session()->flash("message","something wrong");
        }
        

    		return redirect("/admin/users");
    }

///////////////////////////////////////////



    function users()
    {
    	$result=user::All();
    	//print_r($result);
    	
    	return view('admin.users')->with("data",$result);
    }


/////////////////////////////////////////////////////////
    function users_delete(Request $request,$id)
    {
    	 $result=user::find($id);
    	if($result->delete())
    	{
    		$request->session()->flash('message','record deleted');
    		return redirect("/admin/users");
    	}
    	

    }
//////////////////////////////////////////////////////////


     function users_manage(Request $request,$id="0")
     {
    	if($id!="0")
    	{
    		$result=user::find($id);
    		
            $data['name']     =$result->name;
            $data['email']    =$result->email;
            $data['mobile']   =$result->mobile;
            $data['b_date']   =$result->b_date;
            $data['password'] =$result->password;
            $data['img']      =$result->profile_img;
    		$data['id']       =$id;

           
    	}
    	else
    	{
    		
          	$data['name']     ="";
            $data['email']    ="";
            $data['mobile']   ="";
            $data['b_date']   ="";
            $data['password'] ="";
            $data['img']      ="";  
    		$data['id']       =0;
    	}
    		return view('admin.users_add')->with("data",$data);
    }

//////////////////////////////////


}
