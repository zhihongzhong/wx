<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;
class SessionsController extends Controller
{
    //
    protected function create(){
        return view('sessions.create');
    }

    protected function store(Request $request){

        $credentials =$this->validate($request,[
            'email'=>'required|email|min:8:max:255',
            'password'=>'required']);
        if(Auth::attempt($credentials)){
            session()->flash('success','welcome back');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','incorrect account or password');
            return redirect()->back();
        }
    }
    
}
