<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
    	return view('front-end.home.home');
    }
    public function categoryProducts(){
    	return view('front-end.category.category-content');

    }
}
