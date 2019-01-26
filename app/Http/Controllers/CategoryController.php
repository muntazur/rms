<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    public function getAllCategory()
    {
      $categories = DB::table('categories')->get();
      return view('category.home',['categories'=>$categories]);
    }
    public function getAllItem($category_id)
    {   
        //echo $category_id;
        $items = DB::table('items')->get()->where('category_id',$category_id);
        return view('items.home',['items'=>$items]);
    }

    public function getOrder($item_id)
    {
        
    }
}
