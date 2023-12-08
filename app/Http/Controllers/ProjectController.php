<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\members;
use App\Models\module;
use App\Models\task;

use DB;
use Session;

class ProjectController extends Controller
{


    public function viewproject()
    {
     $user=project::all();
     return view('viewproject',compact('user'));
    }


    public function editproject($id)
    {
    $user=project::find($id);
    return view('editproject',compact('user'));
    }

    
    public function updateproject(Request $request)
    {
        $updating=DB::table('projects')->where('id',$request->input('id'))->update([
        
            'prjname'=>$request->input('prjname'),
            'tech'=>$request->input('tech'),
            'desc'=>$request->input('desc'),
            'clname'=>$request->input('clname'),
            'stdt'=>$request->input('stdt'),
            'endt'=>$request->input('endt'),
            'hr'=>$request->input('hr'),
        ]);
           return redirect('/viewproject');
    }


    public function deleteproject($id)
    {
        $user=project::find($id);
        $user->delete();
        $user=members::where('prjid',$id)->delete();
        $user=module::where('prjid',$id)->delete();
        $user=task::where('prjid',$id)->delete();        
        return redirect('/viewproject');
    }
}
