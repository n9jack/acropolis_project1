<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_login;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->has('ADMIN_LOGIN'))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return view('admin.login');
        }   
    }

    public function auth(Request $request)
    {
    	$email=$request->post('email');
    	$password=$request->post('password');
    	$result=admin_login::where(['email'=>$email])->first();
    	if($result)
    	{
            if(Hash::check($password,$result->pass))
            {
                $request->session()->put('ADMIN_LOGIN',true);
        		$request->session()->put('ADMIN_ID',$result->id);
                return redirect('admin/dashboard');
            }
            else
            {
               $request->session()->flash("error","incorrect password");
               return  redirect("admin"); 
            }   
    	}
    	else
    	{
    		$request->session()->flash("error","please fill correct information");
    	    return	redirect("admin");
    	}
    }


       // public function update()
    // {
    //     $result=admin_login::find('1');
    //     $result->pass=Hash::make('123456');
    //     $result->save();
    // }  


    public function logout(Request $request)
    {
        $request->session()->forget('ADMIN_LOGIN','ADMIN_ID');
        $request->session()->flash("error","Logout");
        return  redirect("admin");
    }
}
