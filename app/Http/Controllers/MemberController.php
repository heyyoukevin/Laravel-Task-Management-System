<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;

use DB;
use Session;

class MemberController extends Controller
{
    
    
    public function viewgroupmembers($pid)
    {
        $user=members::where('prjid',$pid)->get();
        return view('viewgroupmembers',compact('user'));
    }


    public function deletegroupmembers($id,$prjid)
    {
        $user=members::find($id);
        $user->delete();
        return redirect('/viewgroupmembers/'.$prjid);
    }
}
