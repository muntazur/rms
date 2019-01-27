<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Order;
use Session;
session_start();

class CategoryController extends Controller
{
    //
    public function getAllCategory()
    { 
      if(Session::get('key')){
        $categories = DB::table('categories')->get();
        return view('category.home',['categories'=>$categories]);
      }
      else return view('Home.external');
    }
    public function getAllItem($category_id)
    {   
        //echo $category_id;
       if(Session::get('key')){
            $category_name = DB::table('categories')->select('name')->where('id',$category_id)->first();
            $items = DB::table('items')->get()->where('category_id',$category_id);
            return view('items.home',['items'=>$items])->with('category_name',$category_name);
        }
        else return view('Home.external');
    }

    public function getOrder($item_id,$item_name)
    {  if(Session::get('key')){ 
         return view('items.order',compact('item_id','$item_id'),compact('item_name','$item_name'));
       }
       else return view('Home.external');
    }

    public function storeOrder(Request $request)
    {   
        // inserting order

        if(Session::get('key')){

            $order = new Order;
            $order->item_id = $request->item_id;
            $order->item_name = $request->item_name;
            $order->quantity = $request->quantity;
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->date = $request->date;
    
            $order->save();
    
            return redirect()->back();
        }
        else return view('Home.external');
    }
}
