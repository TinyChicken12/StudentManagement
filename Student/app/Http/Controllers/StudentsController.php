<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        return view('sbadmin2.subviews.index');
    }

    public function create(){
        return view('sbadmin2.subviews.create');
    }

    public function edit(){
        return view('sbadmin2.subviews.edit');
    }

    public function delete(){
        return view('sbadmin2.subviews.delete');
    }

    public function store(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
