<?php

namespace App\Http\Controllers;

use App\Models\Chefs;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function showUsers()
   {
    $data=User::all();
    return view('admin.user',compact("data"));

   }
   public function deleteUser($id)
   {
    $data=User::find($id);
    $data->delete();
    return redirect()->back();
    
   }
   public function foodMenu()
   {
      $data=Food::all();
      return view("admin.foodMenu",compact("data"));
   }
   public function upLodeFood(Request $request)
   {
      $data=new Food();

      $image=$request->image;

      $imageName=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('foodimage', $imageName);
      $data->image= $imageName;

      $data->title=$request->title;
      $data->price=$request->price;
      $data->description	=$request->description	;
      $data->save();

      return redirect()->back();


   }
   public function deleteFood($id)
   {
      $data=Food::find($id);
    $data->delete();
    return redirect()->back();
      
   }

   public function reservation(Request $request)
   {
      $data=new Reservation();

      

      $data->name=$request->name;
      $data->email=$request->email;
      $data->phone=$request->phone;
      $data->guest=$request->guest;
      $data->time=$request->time;
      
      $data->date=$request->date;
      $data->message=$request->message;

      
      $data->save();

      return redirect()->back();


   }
   public function viewReservation(Request $request)
   {
      $data=reservation::all();




      return view("admin.viewReservation",compact('data'));


   
   }
   public function viewChefs(Request $request)
   {
      $data=chefs::all();
      
      return view("admin.viewChefs",compact("data"));


   }
   public function upLodeChefs(Request $request)
   {
      $data=new Chefs();

      $image=$request->image;

      $imageName=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('chafesImage', $imageName);
      $data->image= $imageName;

      $data->name=$request->name;
      $data->Specialization=$request->Specialization	;
      
      $data->save();

      return redirect()->back();


   }
   public function updateChafe(Request $request,$id)
   {
      
      $data= Chefs::find($id);

      return view("admin.viewChefsUpdate",compact("data"));


   }

   public function updateChefsFood(Request $request,$id)
   {
      
      $data= Chefs::find($id);
      $image=$request->image;
      if($image){
         

      $imageName=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('chafesImage', $imageName);
      $data->image= $imageName;
      }
      

      $data->name=$request->name;
      $data->Specialization=$request->Specialization	;
      
      $data->save();

      return redirect()->back();

     


   }
   public function deleteChafe($id)
   {
    $data=Chefs::find($id)->delete();
   //  $data->delete();
    return redirect()->back();
    
   }


}
