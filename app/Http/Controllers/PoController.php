<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulogin;

use DB;
use Session;

class PoController extends Controller
{


    public function viewstaff()
    {
     $user=ulogin::all();
     return view('viewstaff',compact('user'));
    }


    public function editstaff($id)
    {
    $user=ulogin::find($id);
    return view('editstaff',compact('user'));
    }


    public function updatestaff(Request $request)
    {
        $updating=DB::table('ulogins')->where('id',$request->input('id'))->update([
        
            'name'=>$request->input('name'),
            'uname'=>$request->input('uname'),
            'email'=>$request->input('email'),
            'mob'=>$request->input('mob'),
            'add'=>$request->input('add'),
            'dept'=>$request->input('dept'),
            'pass'=>$request->input('pass'),
            'cpass'=>$request->input('cpass'),            
        ]);
           return redirect('/viewstaff');
    }


    public function deletestaff($id)
    {
        $user=ulogin::find($id);
        $user->delete();
        return redirect('/viewstaff');
    }

    
}
