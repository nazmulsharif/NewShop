<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;

class productController extends Controller
{
    public function index(){
    	$categories = Category::where('publication_status',1)->get();
    	$brands = Brand::where('publication_status',1)->get();
    	return view('admin.product.add-product',['categories'=>$categories,'brands'=>$brands]);
    }
    public function manage(){
    	return view('admin.product.manage-product');
    }
    public function save(Request $request){
    	$productImage = $request->file('product_image');
    	$imageName = $productImage->getClientOriginalName();
    	$directory = 'product-image/';
    	$productImage->move($directory,$imageName);
    	return '';
    }
    
}
