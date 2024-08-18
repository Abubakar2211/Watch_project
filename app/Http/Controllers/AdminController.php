<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\order;

class AdminController extends Controller
{

    public function insert(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required|string|max:255',
        ]);
    

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->gender = $request->gender;
    
 
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $imgname = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads/admin'), $imgname);
            $admin->image = $imgname;
        }
    
        $admin->contact = $request->contact;
        $admin->save();
    
 
        return redirect('form')->with('success', 'Admin added successfully!');
    }
    
    
    public function show(){
        $admin['admin']=admin::all();
        return view('admin.admins',$admin);
    }

    public function edit($id){
        $admin['data']=admin::find($id);
        return view("admin.update",$admin);

    }

    public function upd(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact' => 'required|string|max:255',
        ]);
   
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->gender = $request->gender;
    

        if ($request->hasFile('image')) {
     
            if ($admin->image && file_exists(public_path('uploads/admin/' . $admin->image))) {
                unlink(public_path('uploads/admin/' . $admin->image));
            }
    
            $img = $request->file('image');
            $imgname = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('uploads/admin'), $imgname);
            $admin->image = $imgname;
        } else {
       
            $admin->image = $admin->getOriginal('image');
        }
    
        $admin->contact = $request->contact;
        $admin->save();
    
     
        return redirect('admins')->with('success', 'Admin updated successfully!');
    }
    
    public function destroy($id){
        $admin = admin::find($id);
        $admin->delete();
        return redirect('admins');
    }


    public function logoutadmin(Request $request){
        session()->forget('id');
         return redirect('/loginadmin');
      }
      public function profile($id){
            $admin=admin::find($id);
            return  view("admin.profile",compact("admin"));
    }

    public function order(){
        $order['order']=order::all();
        return view('admin.order',$order);
    }
    public function ordershow($id){
        $order['order'] = order::find($id);
        return view('admin.ordershow',$order);
    }
    public function notification(){
        $order['order'] = order::all();
        return view('admin.index',$order);
    }


}
