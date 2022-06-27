<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    public function createBlog()
    {
        return   view('blogs.create');
    }
    public function storeBlog(Request $request)
    {
        
       $this->validate($request,[
        'title'  =>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        'content'=>'required|max:50',
        'image' => 'required|file|mimes:jpg,png'
       ]);
       if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $new_name=rand().'.' .$file->getClientOriginalExtension();
        $file->move(public_path("images"),$new_name);
        return back()->with('success','image uploaded successfully')->
        with('path',$new_name);
}
    session()->put('title', "gugugu");
    session()->put('contentvalue',input("content"));
   
    }
    public function SessionValues()
    {
     
        return view('blogs.store');
    }
  

    }



?>