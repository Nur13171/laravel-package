<?php

namespace Nur13171\FirstPackage\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nur13171\FirstPackage\Facades\FirstPackage;
use Nur13171\FirstPackage\Models\Activity;
use Nur13171\FirstPackage\Models\RexoitUser;
use Nur13171\FirstPackage\Models\Wallet;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller{
    public function ViewDashboard(){
        $users=Wallet::orderBy('id',"DESC")->with('User','Activity')->get();
        return view('first-package::dashboard',compact('users'));
    }


    public function Index(){
        if(Session::has('user')){
            return redirect()->route('dashboard');
        }
        else{
           return view('first-package::login');
         }
      
    }

    public function UserLogin(Request $request)
    {
        if($request->email=="admin@gmail.com" && $request->password=="12345"){
      
        Session::put('user','admin'); 
        return redirect()->route('dashboard');   
        }

        else{

            return redirect()->route('index');
        }
        
    }

    public function UserRegister(){
        return view('first-package::register');
    }

    public function UserStore(Request $request)
    {
        //This method retrieves the user's IP address via request()->ip().
        $ip= request()->ip();

       /* now it is a fixed ip because using local server $data=Location::get("103.209.228.122");
        when we use live server then it would be $data=Location::get($ip); */
        $data=Location::get("103.209.228.122"); 
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
            'phone' => 'required',
        ]);
        $user_id=RexoitUser::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);
        Activity::insert([
            'user_id' => $user_id,
            'activity_name' => $request->activity_name,
            'longitude' => $data->longitude,
            'lattitude' => $data->latitude,
            'created_at' => Carbon::now()
        ]);

        Wallet::insert([
            "user_id" => $user_id
        ]);
       
        return redirect()->route('index');
    }

    


    public function Logout(){
        Session::forget('user');
        return redirect()->route('index');
    }


}