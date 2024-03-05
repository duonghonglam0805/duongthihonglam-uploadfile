<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldInputController extends Controller
{
    //
    public function getForm(){
        return view('form');
    }
    public function postForm(Request $request){
        return back()->withInput($request->except('password'));
    }
}