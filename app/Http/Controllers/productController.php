<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display 
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Products::all();
        return view('admin.viewProduct')->with('products',$products);

    }

    /**
     * Display the add product page [form]
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::All();
        return view('admin.addProduct')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'productName' => 'required',
            'productPrice' => 'required',
            'productCategory' => 'required',
            'productImage' => 'image|nullable|max:1999'
        ]);
        
        if($request->hasFile('productImage')){
            $fileNameWithExt = $request->file('productImage')->getClientOriginalName();
           //  get file name
           $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('productImage')->getClientOriginalExtension();
       //   store filename in database
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
           $path = $request->file('productImage')->storeAs('public/productImages',$fileNameToStore);

           }else{
               $fileNameToStore = 'noimage.png';
           }

           $products = new Products();
           $products->productName = $request->input('productName');
           $products->productPrice = $request->input('productPrice');
           $products->productCategory = $request->input('productCategory');
           $products->productImage= $fileNameToStore;
           $products->save();

           return back()->with('status','Category added successfully');

           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
