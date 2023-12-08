<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\project;

use DB;
use Session;

class StaffprojectController extends Controller
{
    public function staffviewproject()
    {
    $id=session()->get('unamesid');
    $member=members::where('usrid',$id)->pluck('prjid')->toArray();
    $user=project::whereIn('id',$member)->get();
    return view('staffviewproject',compact('user'));
    }
}
