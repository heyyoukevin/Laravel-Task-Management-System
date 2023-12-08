<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use App\Models\module;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ModController extends Controller
{
    

    public function addmodule($id)
     {
        $data=['grpmemb'=>members::where('prjid',$id)->get(),'prjid'=>$id];
        return view('addmodule',$data);
     }


     public function admodule(Request $request)
    {
        $getprjid=request('prjid');
        $getmdtl=request('mdtl');
        $gettech=request('tech');
        $getsts=request('sts');
        $getdesc=request('desc');
        $getstdt=request('stdt');
        $getsttm=request('sttm');
        $getendt=request('endt');
        $getentm=request('entm');
        $gethr=request('hr');
        $getmdasgn=request('mdasgn');

        $user=new module();
        $user->prjid=$getprjid;
        $user->mdtl=$getmdtl;
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
        return redirect('/viewproject');
    }
}
