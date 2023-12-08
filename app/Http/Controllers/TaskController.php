<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use App\Models\members;

use DB;
use Session;

class TaskController extends Controller
{


    public function viewtask($prjid,$mid)
    {
        $user=task::where('prjid',$prjid)->where('mid',$mid)->get();
        return view('viewtask',compact('user'));
    }


    public function edittask($prjid,$mid,$tid)
    {
    $data=['prjid'=>$prjid,'mid'=>$mid];
    $user=task::find($tid);
    return view('edittask',compact('user'),$data);
    }

    
    public function updatetask(Request $request)
    {
        $updating=DB::table('tasks')->where('id',$request->input('id'))->update([   
            'tstl'=>$request->input('tstl'),
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
        $mid=$request->input('mid');
        return redirect('/viewtask/'.$prjid.'/'.$mid);
    }


    public function reassigntask($prjid,$mid,$id)
    {
    $data=[
    'prjid'=>$prjid,
    'mid'=>$mid,
    'id'=>$id
    ];
    $user=members::where('prjid',$prjid)->get();
    return view('reassigntask',compact('user'),$data);
    }

    
    public function againassigntask(Request $request)
    {
        $updating=DB::table('tasks')->where('id',$request->input('id'))->update([
        'mdasgn'=>$request->input('mdasgn'),
        ]);
        $prjid=$request->input('prjid');
        $mid=$request->input('mid');
        return redirect('/viewtask/'.$prjid.'/'.$mid);
    }


    public function deletetask($prjid,$mid,$tid)
    {
        $user=task::find($tid);
        $user->delete();
        return redirect('/viewtask/'.$prjid.'/'.$mid);
    }
}
