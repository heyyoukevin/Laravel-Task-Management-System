<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

use DB;
use Session;

class StafftaskController extends Controller
{
    public function staffviewtask()
    {
        $id=session()->get('unamesid');
        $member=task::where('mdasgn',$id)->pluck('id')->toArray();
        $user=task::whereIn('id',$member)->get();
        return view('staffviewtask',compact('user'));
    }


    public function staffedittaskstatus($prjid,$mid,$tid)
    {
    $data=['prjid'=>$prjid,'mid'=>$mid];
    $user=task::find($tid);
    return view('staffedittaskstatus',compact('user'),$data);
    }

    
    public function staffupdatetaskstatus(Request $request)
    {
        $updating=DB::table('tasks')->where('id',$request->input('id'))->update([
            'sts'=>$request->input('sts'),
        ]);
        $prjid=$request->input('prjid');
        $mid=$request->input('mid');
        return redirect('/staffviewtask');
    }
}
