<?php

namespace App\Http\Controllers;
// use App\Models\watche;
use App\Models\admin;
use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laravel\Prompts\Prompt;

class watchController extends Controller
{
    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
    
        if ($validatedData) {
            $watch = new Watch;
            $watch->name = $request->name;
            $watch->description = $request->description;
            $watch->type = $request->type;
            $watch->brand = $request->brand;
            $watch->price = $request->price;
    
            // $watch->user_id = Auth::id();
       
            if ($request->hasFile('image')) {
                $img = $request->file('image');
                $imgname = time() . '.' . $img->getClientOriginalExtension();
                $img->move(public_path('uploads/watch/'), $imgname);
                $watch->image = $imgname;
            }
    
            $watch->save();
    
            return redirect('addWatch')->with('success', 'Watch added successfully!');
        } else {
            return redirect('addWatch')->with('validation_errors', $validatedData->messages());
        }
    }
    
    
    public function show(){
        $watch['watch']=Watch::all();
        return view('admin.watches',$watch);
    }
    public function edit($id){
        $watch['watch']=Watch::find($id);
        return view('admin.watchUpdate',$watch);
    }
    public function upd(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|string|max:255'
        ]);
    
        $watch = Watch::find($id);
    
        // Ensure the authenticated user is the owner of the watch
        if (Auth::id() !== $watch->user_id) {
            abort(403, 'Unauthorized action.');
        }
    
        $watch->name = $request->input("name");
        $watch->description = $request->input("description");
        $watch->brand = $request->input("brand");
        $watch->type = $request->input("type");
    
        if ($request->hasFile("image")) {
            if ($watch->image && File::exists(public_path('uploads/watch/' . $watch->image))) {
                File::delete(public_path('uploads/watch/' . $watch->image));
            }
            $img = $request->file("image");
            $ex = $img->getClientOriginalExtension();
            $imgname = time() . "." . $ex;
            $img->move(public_path('uploads/watch'), $imgname);
            $watch->image = $imgname;
        }
    
        $watch->price = $request->input("price");
        $watch->save();
    
        return redirect('/watches')->with('success', 'Watch updated successfully.');
    }
    public function destroy($id){
        $watch = Watch::find($id);
        $watch->delete();
        return redirect('watches');
    }
}
