<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\task;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class TskController extends Controller
{
    
    
    public function addtask($prjid,$mid)
     {
        $data=['grpmemb'=>members::where('prjid',$prjid)->get(),'prjid'=>$prjid,'mid'=>$mid];
        return view('addtask',$data);
     }


     public function adtask(Request $request)
    {
        $getprjid=request('prjid');
        $getmid=request('mid');
        $gettstl=request('tstl');
        $gettech=request('tech');
        $getsts=request('sts');
        $getdesc=request('desc');
        $getstdt=request('stdt');
        $getsttm=request('sttm');
        $getendt=request('endt');
        $getentm=request('entm');
        $gethr=request('hr');
        $getmdasgn=request('mdasgn');

        $user=new task();
        $user->prjid=$getprjid;
        $user->mid=$getmid;
        $user->tstl=$gettstl;
        $user->tech=$gettech;
        $user->sts=$getsts;
        $user->desc=$getdesc;
        $user->stdt=$getstdt;
        $user->sttm=$getsttm;
        $user->endt=$getendt;
        $user->entm=$getentm;
        $user->hr=$gethr;
        $user->mdasgn=$getmdasgn;

        $user->save();
        $prjid=$request->input('prjid');
        return redirect('/viewmodule/'.$prjid);
    }
}
