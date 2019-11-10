<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	return view('admin.home.add-category');
    }
     
    public function saveCategory(Request $request){
    	$category  = new Category();
    	$category->category_name		=	$request->category_name;
    	$category->category_description	=	$request->category_description;
    	$category->publication_status	=	$request->publication_status;
    	$category->save();
    	return redirect('category/add-category')->with('message','Category info save successfully');
    }
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.home.manage-category',['categories'=>$categories]);
    }
    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();

        return redirect('/category/manage-category')->with('message','category info unpublished');
    }
    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();

        return redirect('/category/manage-category')->with('message','category info published');
    }
    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.home.edit-category',['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/category/manage-category')->with('message','category info updated');
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage-category')->with('message','category info deleted');
    }
    
}
