<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function registration()
    {
        return view('/auth.register');
    }

    public function register(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
           
        $data = $request->all();

       User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ])->assignRole('user');
         
        return redirect("/login")->withSuccess('You have signed-in');
    }


    public function login(){
        validator(request()->all(), [
             'email' => ['required', 'string', 'email', 'max:255'],
             'password' => ['required', 'string', 'min:8'],
         ])->validate();
         if (auth()->attempt(request()->only(['email','password']))) {
             return redirect('/');
         }else{
             return view('/auth.login'); 
         }     
     }
     public function logout(){
         auth()->logout();
         return redirect('/login');
 
     }
 
     public function loginveiw(){
       return view('auth.login');
        
         
     }
 



     
     
     
     //test for role middleware  
     
     public function adminIndex(){
        $tasks=$tasks = Task::orderBy('completed_at')->get();
         return view('/admin/index', compact('tasks'));
     }
}
