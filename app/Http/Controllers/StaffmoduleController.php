<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\module;

use DB;
use Session;

class StaffmoduleController extends Controller
{
    public function staffviewmodule()
    {
        $id=session()->get('unamesid');
        $member=module::where('mdasgn',$id)->pluck('id')->toArray();
        $user=module::whereIn('id',$member)->get();
        return view('staffviewmodule',compact('user'));
    }


    public function staffeditmodulestatus($prjid,$id)
    {
    $data=['prjid'=>$prjid];
    $user=module::find($id);
    return view('staffeditmodulestatus',compact('user'),$data);
    }

    
    public function staffupdatemodulestatus(Request $request)
    {
        $updating=DB::table('modules')->where('id',$request->input('id'))->update([
            'sts'=>$request->input('sts'),
        ]);
        $prjid=$request->input('prjid');
        return redirect('/staffviewmodule');
    }
}
