<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
    	$categories = Category::where('publication_status', 1)->get();
    	$newProducts = Product::where('publication_status',1)
    	             ->orderBy('id','DESC')
    	             ->take(8)
    	             ->get();

    	return view('front-end.home.home', [
    		'categories' => $categories,
    		'newProducts' => $newProducts
    	]);
    }
    public function categoryProducts(){
    	$categories = Category::where('publication_status', 1)->get();
    	return view('front-end.category.category-content',[
    		'categories' => $categories
    	]);

    }
    public function mailUs(){
    	return view('front-end.mail.maleUs');

    }
}
