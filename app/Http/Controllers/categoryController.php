<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use Session;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcher;

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

// display categories on the page

public function displayCategories()
{
    $categories = Category::all();
    return view('admin.viewCategory')->with('categories',$categories);
}
// display update category page
public function view_UpdateCategory($id){
    $category = Category::find($id);
    return view('admin.updateCategory')->with('category',$category);

    // return view('admin.updateCategory')->with('category',$category);
}
//backend for the update category page
public function updateCategory(Request $request){
  $this->validate($request,[
    'categoryName' => 'required|unique:categories'
  ]);

  $category = Category::find($request->input('id'));
  $category->categoryName = $request->input('categoryName');
  $category->update();

  return redirect('view-category')->with('status','Category updated successfully');
}

// delete category
public function deleteCategory($id){
    $category = Category::find($id);
    $category->delete();

    return redirect('view-category')->with('status',"Category deleted successfully");
}

}