<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
    
    	$newProducts = Product::where('publication_status',1)
    	             ->orderBy('id','DESC')
    	             ->take(8)
    	             ->get();

    	return view('front-end.home.home', [
    		
    		'newProducts' => $newProducts
    	]);
    }
    public function categoryProducts($id){
      $categoryProducts	= Product::where('category_id', $id)
    	         ->where('publication_status', 1)
    	         ->get();
    	//$categories = Category::where('publication_status', 1)->get();
    	return view('front-end.category.category-content', [
           'categoryProducts' => $categoryProducts
    	]);

    }
    public function mailUs(){
    	return view('front-end.mail.maleUs');

    }
}
