<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index(){
    	return view('front-end.index');
    }
    public function category(){
    	return view('front-end.category-product');
    }
}
