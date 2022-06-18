<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\MyRequest;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(MyRequest $request){

        $user = User::where('email',$request->email)->first();

        if(! $user){
           return redirect('/login');
        }

        $info = [
            'email'=> $user->email,      
            'password'=> $request->password
        ];

        $auth=Auth::attempt($info);
        if(! $auth){
            return redirect('login');
            
        }
        return redirect('post');
    }

    public function destroy(){
        Auth::logout();
        return redirect('login');
    }
}
