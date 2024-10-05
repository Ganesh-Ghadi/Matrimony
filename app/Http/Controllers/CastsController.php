<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastsController extends Controller
{
    public function index(){
         $casts = Cast::all();
       return view('Casts.index',['casts'=>$casts]);
    } 

    public function create(){
        return view('Casts.create');
} 

    public function store(Request $request){
             
        $cast = new Cast();

        $request->validate([
            'name' => 'required|string|max:255|unique:casts,name',
        ]);
          
        $cast->name =$request->input('name'); 
        $cast->save();

        return redirect()->route('cast.index')->with('cast', 'Cast created successfully!');

    } 

    public function edit(Request $request, string $id){
         
        $cast = Cast::find($id);

        return view('Casts.edit',['cast'=>$cast]);

    }

    public function update(Request $request, string $id){
         
        $cast = Cast::find($id);

        $request->validate([
            'name' => 'required|string|max:255|unique:casts,name',
        ]);

        $cast->name =$request->input('name'); 
        $cast->save();

        return redirect()->route('cast.index')->with('cast', 'Cast updated successfully!');

    }

    public function delete(Request $request, string $id){
         
        $cast = Cast::find($id);
        $cast->delete();

        return redirect()->route('cast.index')->with('cast', 'Cast Deleted successfully!');

    }



}
