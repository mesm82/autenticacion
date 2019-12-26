<?php

namespace App\Http\Controllers;
use App\Http\Requests\loginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\usuario;

class AuthUsuarioController extends Controller
{
    public function index(){
      return view('home');
    }
    public function iniciar_sesion(loginFormRequest $request){
 
    if (Auth::attempt(['rut' => $request->rut, 'password' => $request->clave],false)) {
      //return view('layouts.app');
      //header("Location: /home");
    
    
    }
     else{
       return response()->json('los datos ingresados son incorrectos');
     }
  }
}
