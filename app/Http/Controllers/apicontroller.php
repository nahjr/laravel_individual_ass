<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car1;
class apicontroller extends Controller
{
    public function save(Request $request)
    {
        $cars = new Car1();
        $cars->mode = $request->input('mode');
        $cars->brand = $request->input('brand');
        $cars->color = $request->input('color');
        $cars->mdate = $request->input('mdate');
    
        $cars->save();
        return response()->json($cars);
    }


   public function car_update(Request $request)
    {
        $cars = Car1::find($request->id);
        $cars->mode = $request->mode;
        $cars->brand = $request->brand;
        $cars->color = $request->color;
        $cars->mdate = $request->mdate;
        $cars->save();
        return "updated succesfully";
    }
    
    public function delete_by_id($id)
   {
         Car1::where('id',$id)->delete();
      return "deleted";
         
       
   }
  
   public function getcar()
   {
       $cars = new Car1();
       return $cars->get();
   }
  


   function getById($id){
           $cars=Car1::where('id',$id)->first();
           return $cars;
       }
}
