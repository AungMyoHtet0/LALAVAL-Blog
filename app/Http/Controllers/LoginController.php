<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request){
        $request->all();
        
        $user = User::where('email',$request->email)->first();

        if(! $user){
            throw ValidationException::withMessages([
                'MyError' => 'Email or Pasword Is incorrect'
            ]);
        //   return redirect('/login');
        }

        $info = [
            'email'=> $user->email,      
            'password'=> $request->password
        ];

        $auth=Auth::attempt($info);
        if(! $auth){
            throw ValidationException::withMessages([
                'MyError'=>'email or password is incorrect'
            ]);
            //return redirect('login');
            
        }
        return redirect('post');
    }

    public function destroy(){
        Auth::logout();
        return redirect('login');
    }
}
