<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyersController extends Controller
{
    public function index(){
        return view("revises/index");
    }

    public function show(){
        return view("revises/show");
    }

    public function edit(){
        return view("revises/edit");
    }
}
