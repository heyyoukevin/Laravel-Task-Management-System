<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\module;
use App\Models\members;
use App\Models\task;

use DB;
use Session;

class ModuleController extends Controller
{
    

    public function viewmodule($mid)
    {
        $user=module::where('prjid',$mid)->get();
        return view('viewmodule',compact('user'));
    }


    public function editmodule($prjid,$id)
    {
    $data=['prjid'=>$prjid];
    $user=module::find($id);
    return view('editmodule',compact('user'),$data);
    }

    
    public function updatemodule(Request $request)
    {
        $updating=DB::table('modules')->where('id',$request->input('id'))->update([   
            'mdtl'=>$request->input('mdtl'),
            'tech'=>$request->input('tech'),
            'sts'=>$request->input('sts'),
            'desc'=>$request->input('desc'),
            'stdt'=>$request->input('stdt'),
            'sttm'=>$request->input('sttm'),
            'endt'=>$request->input('endt'),
            'entm'=>$request->input('entm'),
            'hr'=>$request->input('hr'),
        ]);
        $prjid=$request->input('prjid');
        return redirect('/viewmodule/'.$prjid);
    }


    public function reassignmodule($prjid,$id)
    {
    $data=[
    'id'=>$id,
    'prjid'=>$prjid
    ];
    $user=members::where('prjid',$prjid)->get();
    return view('reassignmodule',compact('user'),$data);
    }

    
    public function againassignmodule(Request $request)
    {
        $updating=DB::table('modules')->where('id',$request->input('id'))->update([
        'mdasgn'=>$request->input('mdasgn'),
        ]);
        $prjid=$request->input('prjid');
        return redirect('/viewmodule/'.$prjid);
    }


    public function deletemodule($id,$prjid)
    {
        $user=module::find($id);
        $user->delete();
        $user=task::where('mid',$id)->delete();
        return redirect('/viewmodule/'.$prjid);
    }
}
