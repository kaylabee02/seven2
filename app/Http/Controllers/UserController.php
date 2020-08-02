<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request){
        //  dd($request->file());
      
        if($request->hasfile('image')){
            User::uploadAvatar($request->image);
        }
        return redirect()->back();
    }
   
    // 
    public  function index(){
    

        //user eloquenet or model object relational mapping ORM
         //using model interact with db
        //with encryppassword

        // $user           =   new User();
        // $user->name     =   'kaylsa';
        // $user->email    =   'kaysla@gmial.com';
        // $user->password =   bcrypt('password');
        // $user->save();

        //above reduce into 1 line to create user
        // $data = [
        //     'name'      =>  'll',
        //     'email'     =>  'jsgdgfdfddk@gmail.com',
        //     'password'  =>  'hehe',
        // ];
        // User::create($data);
        
        //facade is magical,dont have to creade object calling all fuxn as a static method
        //getall user
        // $user = User::all();
        // return $user;
        return view('home');
      
        //dd kay same sa  var_dumo but well sturctured and cleaner
        
        //detele
        // User::where('id',7)->delete();
        //udpate using model
        // User::where('id',1)->update(['name'=>'asdfghjkl']);
    }

}
