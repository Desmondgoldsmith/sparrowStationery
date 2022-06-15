<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use Session;
use Illuminate\Support\Facades\Session;

class categoryController extends Controller
{
    // public function Category(Request $request){
    //     dd($request);
    //     $this->validate($request,[
    //         'category'=>'required|unique:categories'
    //     ]);

    //     $category = new Category();
    //     $category->category = $request->input('category');
    //     $category->save();

    //     return back()->with('status','Category saved successfully');

    // }


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
    // return dd($category);

}

public function create()
{
    return view('admin.addCategory');
}

}