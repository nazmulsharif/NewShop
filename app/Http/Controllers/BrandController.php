<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
    	return view('admin.brand.add-brand');

    }
    public function manageBrand(){
        $brands = Brand::all();
    	return view('admin.brand.manage-brand',['brands'=> $brands]);

    }
    public function unpublishedBrand($id){
        $brands = Brand::find($id);
        $brands->publication_status=0;
        $brands->save();
        return redirect('/brand/manage-brand')->with('message','Brand is unpublished');

    }
    public function publishedBrand($id){
        $brands = Brand::find($id);
        $brands->publication_status=1;
        $brands->save();
        return redirect('/brand/manage-brand')->with('message','Brand is published');
    }
    public function saveBrand(Request $request){
    	$this->validate($request,[
    		'brand_name'		=>'required|alpha|max:20|min:2',
    		'brand_description'	=>'required',
    		'publication_status'=> 'required'
    	]);

    	$brand = new Brand();
    	$brand->brand_name			 = $request->brand_name;
    	$brand->brand_description	 = $request->brand_description;
    	$brand->publication_status	 = $request->publication_status;

    	$brand->save();
    	return redirect('/brand/add-brand')->with('message','brand info save successfully');

    }
    public function brandEdit($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);
    }
     public function brandUpdate(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/brand/manage-brand')->with('message','brand info updated');
    }  
    public function brandDelete($id){
        $brand= Brand::find($id);
        $brand->delete();
        return redirect('/brand/manage-brand')->with('message','brand is deleted');
    } 
    
}