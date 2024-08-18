<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

 


    public function reg(Request $req){
        $data = $req->validate([
            "name" => "required",
            "contact" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
            "password_confirmation" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user = new User;
        $user->name = $req->name;
        $user->contact = $req->contact;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
    
        if ($req->hasFile('image')) {
            $img = $req->file('image');
            $imgname = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads/'), $imgname);
            $user->image = $imgname;
        }
    
        $user->save();
        return redirect('login');
    }
    


    public function loginadmin(Request $data)
    {
        $credentials = $data->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session()->put('id', $user->id);
            session()->put('user', $user); 
            return redirect('/');
        } else {
            return redirect('login')->with('error', 'Email/Password is incorrect.');
        }
    }
    
    public function adminpanel(Request $data) {
        $user = admin::where('email', $data->input('email'))
                     ->where('password', $data->input('password'))
                     ->first();
        
        if ($user) {
            session()->put('id', $user->id);
            session()->put('name', $user->name);
            session()->put('image','uploads/admin/'. $user->image);
            return redirect('adminpanel');
        } else {
            return redirect('loginadmin')->with('error', 'Email/Password is incorrect.');
        }
    }
    

    public function logout(Request $request){
      session()->forget('id');
       return redirect('/login');
    }

}
