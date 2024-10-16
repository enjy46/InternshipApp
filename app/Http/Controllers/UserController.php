<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

   public function login()
   {
      return view('welcome');
   }

   public function auth_login(Request $request)
   {
       $email = $request->email;
       $password = $request->password;
   
       $user = User::where('email', $email)->first();
       
       if ($user && Hash::check($password, $user->password))
       {
           Session::put('user', $user);
           
            return redirect()->route('Home'); 
       }
        else
         {
   
           $queryUnsafe = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
           $usersUnsafe = DB::select($queryUnsafe);

           if (!empty($usersUnsafe))
            {
               Session::put('user', $usersUnsafe[0]);
               return redirect()->route('Home');
            }
            else
             {
               return 'error';
            }
       }
   }
   

 public function register(Request $request)
 {
    
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    $user->is_admin = false;
    $user->save();
    return view('welcome');
 }
}
