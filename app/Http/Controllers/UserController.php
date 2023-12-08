<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulogin;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;  

class UserController extends Controller
{


    public function genhome()
    {
        return view('generalhome');
    }


    public function index()
    {
        return view('loginpage');
    }


    public function staffreg()
    {
        return view('staffregister');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            
            'name' => 'required',
            'uname' => 'required|unique:App\Models\ulogin,uname',
            'email' => 'required|email|unique:App\Models\ulogin,email',
            'mob' => 'required|digits:10|unique:App\Models\ulogin,mob',
            'add' => 'required',
            'dept' => 'required',
            'pass' => 'required|min:5',
            'cpass' => 'required|same:pass',
        ]);

        $getname=request('name');
        $getuname=request('uname');
        $getemail=request('email');
        $getmob=request('mob');
        $getadd=request('add');
        $getdept=request('dept');
        $getpass=request('pass');
        $getcpass=request('cpass');
       
       
        $user=new ulogin();
        $user->name=$getname;
        $user->uname=$getuname;
        $user->email= $getemail;
        $user->mob=$getmob;
        $user->add=$getadd; 
        $user->dept=$getdept;
        $user->pass= $getpass;
        $user->cpass=$getcpass;
        
        $user->save();
        return view('adminhome');
    }


    public function logs(Request $request)
    {
        $request->validate([
            'uname' => 'required',
            'pass' => 'required',

        ]);

        $userinfo2 = ulogin::where([['uname',$request->uname],['pass',$request->pass]])->first();
        
        if($request->uname=='admin' && $request->pass=='admin')
        {
            $request-> session()->put('uname','admin');
            return redirect('/adhm');
        }
        else if($userinfo2)
        {
            $request->session()->put('uname',$userinfo2->uname);
            $request->session()->put('unamesid',$userinfo2->id);
            return redirect('/sthm');
        }
        else
        {
            return back()->with('fail','Invalid Credentials !');
        }

    }


    public function adminhome()
    {
        return view('adminhome');
    }

    
    public function staffhome()
    {
        
        $data=['loggeduserinfo'=>ulogin::where('uname','=',session('uname'))->first()];
        return view('staffhome',$data);
    }


    public function logout()
    {
        if(session()->has('uname'))
        {
            session()->pull('uname');
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }
    }
}
