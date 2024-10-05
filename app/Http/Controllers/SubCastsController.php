<?php

namespace App\Http\Controllers;

use App\Models\SubCast;
use Illuminate\Http\Request;

class SubCastsController extends Controller
{
    public function index(){
        $sub_casts = SubCast::all();
      return view('sub_casts.index',['sub_casts'=>$sub_casts]);
   } 

   public function create(){
       return view('sub_casts.create');
} 

   public function store(Request $request){
            
       $sub_cast = new SubCast();

       $request->validate([
           'name' => 'required|string|max:255|unique:sub_casts,name',
       ]);
         
       $sub_cast->name =$request->input('name'); 
       $sub_cast->save();

       return redirect()->route('sub_cast.index')->with('sub_cast', 'Sub Cast created successfully!');

   } 

   public function edit(Request $request, string $id){
        
       $sub_cast = SubCast::find($id);

       return view('sub_casts.edit',['sub_cast'=>$sub_cast]);

   }

   public function update(Request $request, string $id){
        
       $sub_cast = SubCast::find($id);

       $request->validate([
           'name' => 'required|string|max:255|unique:sub_casts,name',
       ]);

       $sub_cast->name =$request->input('name'); 
       $sub_cast->save();

       return redirect()->route('sub_cast.index')->with('sub_cast', 'Cast updated successfully!');

   }

   public function delete(Request $request, string $id){
        
       $sub_cast = SubCast::find($id);
       $sub_cast->delete();

       return redirect()->route('sub_cast.index')->with('sub_cast', 'Cast Deleted successfully!');

   }

}
