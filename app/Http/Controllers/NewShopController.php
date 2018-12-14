<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
    	$categories = Category::where('publication_status', 1)->get();
    	return view('front-end.home.home', [
    		'categories' => $categories
    	]);
    }
    public function categoryProducts(){
    	return view('front-end.category.category-content');

    }
    public function mailUs(){
    	return view('front-end.mail.maleUs');

    }
}
