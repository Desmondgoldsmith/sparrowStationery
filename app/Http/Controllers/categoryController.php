<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use Session;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    public function createCategory(Request $request){
        $this->validate($request,
        [
            'categoryName'=>'required|unique:categories'
        ]

    );
    
    $category = new Category();
    $category->categoryName = $request->input('categoryName');
    $category->save();
    return redirect('/category-create')->with('status','Category Saved Successfully');
}

public function create()
{
    return view('admin.addCategory');
}

// // view category page
// public function view(){
//     return view("admin.viewCategory");
// }

// display categories on the page

public function displayCategories()
{
    $categories = Category::all();
    return view('admin.viewCategory')->with('categories',$categories);
}



}