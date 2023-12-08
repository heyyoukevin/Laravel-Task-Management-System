<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

use Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class ProjController extends Controller
{
 

     public function addproject()
     {
         return view('addproject');
     }


    public function adproject(Request $request)
    {
        
        $getprjname=request('prjname');
        $gettech=request('tech');
        $getdesc=request('desc');
        $getclname=request('clname');
        $getstdt=request('stdt');
        $getendt=request('endt');
        $gethr=request('hr');



        $user=new project();
        $user->prjname=$getprjname;
        $user->tech=$gettech;
        $user->desc= $getdesc;
        $user->clname=$getclname;
        $user->stdt=$getstdt; 
        $user->endt=$getendt;
        $user->hr= $gethr;
       
        
        
        $user->save();
        return redirect('/viewproject');
    }

    
}
