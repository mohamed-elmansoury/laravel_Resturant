<?php

namespace App\Http\Controllers;



use App\Models\Chefs;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {
      $data=Food::all();
      $data2=Chefs::all();
      $user_id=Auth::id();
      $count=Cart::where("user_id",$user_id)->count();
    return view("home",compact("data","data2","count"));
   }
   public function redirects()
   {
      $data=Food::all();
      $data2=Chefs::all();

      $userType=Auth::user()->usertype;
      if ($userType ==1) {
      return view("admin.adminHome");
         
      }
      elseif($userType ==2){
         return view("kitchen");
      }
      

      else{
         $data=Food::all();
         $user_id=Auth::id();
         $count=Cart::where("user_id",$user_id)->count();
       return view("home",compact("data","data2","count"));
      }
      
      

   
   }
   public function addCart(Request $request ,$id)
   {
      if(Auth::id()){

         $user_id=Auth::id();
         $food_id=$id;
         $quantity= $request->quantity;
         
         
         $cart= new Cart();
         $cart->user_id=$user_id;
         $cart->food_id=$food_id;
         $cart->quantity=$quantity;

         
        

         
         
         


         return redirect()->back();

      }else{
         return view("/auth.register");
      }

   }
   
   public function showCart(Request $request , $id )

   {
                  $data=Cart::all();
      
               $count=Cart::where("user_id",$id)->count();

               //  $data2=Cart::where('user_id',$id)->join('food','carts.food_id'  ,"=", 'food_id')->get();
          
            return view("showCart",compact("count",'data',));

      
   }
      public function deleteCartItem(Request $request, $id)
      {
         $data=Cart::find($id);
         $data->delete();

      
      return redirect()->back();
      
      }

}
