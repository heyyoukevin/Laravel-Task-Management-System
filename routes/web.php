<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PoController;
use App\Http\Controllers\ProjController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MembController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ModController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TskController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StaffprojectController;
use App\Http\Controllers\StaffmoduleController;
use App\Http\Controllers\StafftaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/logs',[UserController::class,'logs']);
Route::get('/logout',[UserController::class,'logout']);

Route::post('/login',[UserController::class,'store']);

Route::get('/editstaff/{id}',[PoController::class,'editstaff']);
Route::post('editstaff/updatestaff',[PoController::class,'updatestaff']);
Route::post('/deletestaff/{id}',[PoController::class,'deletestaff']);

Route::post('/adproject',[ProjController::class,'adproject']);
Route::get('/editproject/{id}',[ProjectController::class,'editproject']);
Route::post('editproject/updateproject',[ProjectController::class,'updateproject']);
Route::post('/deleteproject/{id}',[ProjectController::class,'deleteproject']);

Route::post('/adgroupmembers',[MembController::class,'adgroupmembers']);
Route::get('/viewgroupmembers/{pid}',[MemberController::class , 'viewgroupmembers' ] );
Route::post('/deletegroupmembers/{id}/{prjid}',[MemberController::class,'deletegroupmembers']);

Route::get('/addmodule/{id}',[ModController::class , 'addmodule' ] );
Route::post('/admodule',[ModController::class,'admodule']);
Route::get('/viewmodule/{mid}',[ModuleController::class , 'viewmodule' ] );
Route::get('/editmodule/{prjid}/{id}',[ModuleController::class,'editmodule']);
Route::post('editmodule/updatemodule',[ModuleController::class,'updatemodule']);
Route::get('/reassignmodule/{prjid}/{id}',[ModuleController::class,'reassignmodule']);
Route::post('reassignmodule/againassignmodule',[ModuleController::class,'againassignmodule']);
Route::post('/deletemodule/{id}/{prjid}',[ModuleController::class,'deletemodule']);

Route::get('/addtask/{prjid}/{mid}',[TskController::class , 'addtask' ] );
Route::post('/adtask',[TskController::class,'adtask']);
Route::get('/viewtask/{prjid}/{mid}',[TaskController::class , 'viewtask' ] );
Route::get('/edittask/{prjid}/{mid}/{tid}',[TaskController::class,'edittask']);
Route::post('edittask/updatetask',[TaskController::class,'updatetask']);
Route::get('/reassigntask/{prjid}/{mid}/{id}',[TaskController::class,'reassigntask']);
Route::post('reassigntask/againassigntask',[TaskController::class,'againassigntask']);
Route::post('/deletetask/{prjid}/{mid}/{tid}',[TaskController::class,'deletetask']);

Route::get('/staffeditmodulestatus/{prjid}/{id}',[StaffmoduleController::class,'staffeditmodulestatus']);
Route::post('staffeditmodulestatus/staffupdatemodulestatus',[StaffmoduleController::class,'staffupdatemodulestatus']);

Route::get('/staffedittaskstatus/{prjid}/{mid}/{tid}',[StafftaskController::class,'staffedittaskstatus']);
Route::post('staffedittaskstatus/staffupdatetaskstatus',[StafftaskController::class,'staffupdatetaskstatus']);





Route::group(['middleware'=>['AuthCheck']],function()
{
Route::get('/',[UserController::class , 'genhome' ] );
Route::get('/log',[UserController::class , 'index' ] );

Route::get('/adhm',[UserController::class , 'adminhome' ] );
Route::get('/sthm',[UserController::class , 'staffhome' ] );

Route::get('/reg',[UserController::class , 'staffreg' ] );
Route::get('/viewstaff',[PoController::class , 'viewstaff' ] );

Route::get('/addproject',[ProjController::class , 'addproject' ] );
Route::get('/viewproject',[ProjectController::class , 'viewproject' ] );

Route::get('/addgroupmembers',[MembController::class , 'addgroupmembers' ] );

Route::get('/staffviewproject',[StaffprojectController::class,'staffviewproject']);
Route::get('/staffviewmodule',[StaffmoduleController::class,'staffviewmodule']);
Route::get('/staffviewtask',[StafftaskController::class,'staffviewtask']);
});