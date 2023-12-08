<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulogin;
use App\Models\project;
use App\Models\members;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class MembController extends Controller
{


    public function addgroupmembers()
    {
        $data=[
        'grpmemb'=>ulogin::all(),
        'prfetch'=>project::all(),
        ];
        return view('addgroupmembers',$data);
    }

    
    public function adgroupmembers(Request $request)
    {
        $getprjid=request('prjid');
        $getusrid=$request->usrid;

        
        for($i = 0; $i < count($getusrid); $i++)
        {
            $user=new members();
            $user->prjid=$getprjid;
            $user->usrid=$getusrid[$i];
            $user->save();
        }
        return redirect('/viewproject');
    }
}
