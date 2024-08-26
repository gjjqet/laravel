<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){

        // dd("Hello Sir");

        $data["employeesdatas"] = [
            "name"=>"aung ko ko",
            "gmail"=>"aungkoko@gmail.com",
            "phone"=>'0912345'
        ];

        return view('employees/index',$data);

    }

    public function passingdataone(){
        $greeting = "Have a nice day";
        $hifi = "Thanks sir";

        $employees = [
            "Honey Nway Oo",
            "Mandalay",
            "09123456"
        ];

        return view("employees/dataone",["greet"=>$greeting,"hi"=>$hifi,"staffs"=>$employees]);
    }

    public function passingdatatwo(){
        $greeting = "Have a nice day";
        $hifi = "Thanks sir";

        $employees = [
            "Honey Nway Oo",
            "Mandalay",
            "09123456"
        ];

        return view("employees/datatwo")->with("greet",$greeting)->with("hi",$hifi)->with("staffs",$employees);
    }

    public function passingdatathree(){
        $greeting = "Have a nice day";
        $hifi = "Thanks sir";

        $employees = [
            "Honey Nway Oo",
            "Mandalay",
            "09123456"
        ];

        // return view("employees/datathree",compact("greeting","hifi","employees"));
        return view("employees/datathree")->with(compact("greeting","hifi","employees"));
    }

}
