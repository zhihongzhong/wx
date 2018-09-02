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
            'email'=>'required|email|min:8:max:20',
            'password'=>'required']);
        if(Auth::attempt($credentials)){
            return redirect()->route('users.show',[Auth::user()]);
            session()->flash('success','welcome back');
        }else{
            return redirect()->back();
            session()->flash('error','incorrect account or password');
        }
    }
}
