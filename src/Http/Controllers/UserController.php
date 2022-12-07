<?php

namespace Nur13171\FirstPackage\Http\Controllers;

use Illuminate\Http\Request;
use Nur13171\FirstPackage\Facades\FirstPackage;
use Nur13171\FirstPackage\Models\RexoitUser;

class UserController extends Controller{


    public function home(){
        return view('first-package::home');
    }


    public function index(){
        return view('first-package::register');
    }

    public function Userlogin()
    {
        return view('first-package::login');
    }

    public function UserStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ]);
        RexoitUser::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            
        ]);
       
    }


}