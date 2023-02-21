<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function connecter(){
        return view('candidat.connecter');
    }

    public function inscrire(){
        
        return view('candidat.inscrire');
    }

    public function registration(User $user,LoginRequest $request){

        
        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        
        if ($request->sexe == 'homme') {
            $input['image'] = 'homme.jpg';
        } else {
            $input['image'] = 'femme.jpg';
        }
        

        User::create($input);
        
        return redirect('connecter')->with('success', 'Votre compte a été crée. Connectez-vous');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->intended('home');
        }else{
          return redirect('connecter')->with('error', 'Information de connexion non reconnue');
        }
    }

    public function logout (){
          //  Session::flush();
            Auth::logout();
            return redirect('/');
    }
}
