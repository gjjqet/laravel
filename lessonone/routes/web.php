<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\WorkersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return "Save Mandalay";
// });


Route::get('/sayar', function () {
    return "Hay, Sayar Nay Kaung Lar ??";
});

Route::get('/sayhi', function () {
    return "Hi Min Ga Lar Par";
});

Route::get("/about",function(){
    return view("aboutme");
});


Route::view("/about","aboutme");


Route::view("/about/company","aboutcompany");


Route::get("/contact",function(){
    return redirect("/about");
});


Route::redirect("/contact","/about/company");


//------------------------------------------------------------------------


Route::get("/about/office/{staff}",function($staff){
    return "hello {$staff}";
});



Route::get("/about/company/{staff}",function($staff){
    return view("aboutcompanystaff",["person"=>$staff]);
});



Route::get("/about/company/{staff}/{city}",function($staff,$city){
    return view("aboutcompanystaffbycity",["person"=>$staff,"location"=>$city]);
});


Route::get("/profile",function(){
    return view("myprofile");
})->name("prof");



// Route::get("/students",[\APP\Http\Controllers\StudentsController::class,"index"])->name("students.index");
// Route::get("/students/show",[\APP\Http\Controllers\StudentsController::class,"show"])->name("students.show");
// Route::get("/students/edit",[\APP\Http\Controllers\StudentsController::class,"edit"])->name("students.edit");


Route::get("/students",[StudentsController::class,"index"])->name("students.index");
Route::get("/students/show",[StudentsController::class,"show"])->name("students.show");
Route::get("/students/edit",[StudentsController::class,"edit"])->name("students.edit");


// Route::group(["prefix"=>"students"],function(){
//     Route::get("/",[\App\Http\Controllers\StudentsController::class,"index"])->name("students.index");
//     Route::get("/show",[\App\Http\Controllers\StudentsController::class,"show"])->name("students.show");
//     Route::get("/edit",[\App\Http\Controllers\StudentsController::class,"edit"])->name("students.edit");
// });


// Route::group(["prefix"=>"students"],function(){
//     Route::get("/",[StudentsController::class,"index"])->name("students.index");
//     Route::get("/show",[StudentsController::class,"show"])->name("students.show");
//     Route::get("/edit",[StudentsController::class,"edit"])->name("students.edit");
// });



// Route::name("students.")->group(function(){
//     Route::get("/students",[StudentsController::class,"index"])->name("index");
//     Route::get("/students/show",[StudentsController::class,"show"])->name("show");
//     Route::get("/students/edit",[StudentsController::class,"edit"])->name("edit");
// });





//--------------------------------------------------------------------------------------


Route::get("/staffs",[StaffsController::class,"home"])->name("staffs.home");
Route::get("/staffsparty",[StaffsController::class,"party"])->name("staffs.party");
Route::get("/staffsparty/{total}",[StaffsController::class,"partytotal"])->name("staffs.total");
Route::get("/staffsparty/{total}/{position}",[StaffsController::class,"partytotalconfirm"])->name("staffs.status");


Route::get("/employees",[EmployeesController::class,"index"])->name("employees.index");
Route::get("/employees/passingdataone",[EmployeesController::class,"passingdataone"])->name("employees.passingdataone");
Route::get("/employees/passingdatatwo",[EmployeesController::class,"passingdatatwo"])->name("employees.passingdatatwo");
Route::get("/employees/passingdatathree",[EmployeesController::class,"passingdatathree"])->name("employees.passingdatathree");




//----------------------------------------------------------------------------------------------------

// Revision 

