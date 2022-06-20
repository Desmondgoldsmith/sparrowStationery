<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class productController extends Controller
{
    /**
     * Display 
     *
     * @return \Illuminate\Http\Response
     */
     

    public function index()
    {
        $products = Products::paginate(5);
        return view('admin.viewProduct')->with('products',$products);

    }

    // public function search(Request $request)
    // {
    //    if(isset($_GET(['query']))){
    //     $search_text = $_GET['query'];
    //     $products = DB::table('products')->where('productName','LIKE','%'.$search_text.'%')->paginate(2); 
    //     return view('admin.search',['products'=>$products]);   
    // }else{
    //     return view();
    //    }
    // }
 





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
            'productDescription' => 'required',
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
           $products->productDescription = $request->input('productDescription');
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
        $products = Products::find($id);
        $categories = Category::all();
        return view('admin.updateProduct')->with('products',$products)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'productName' => 'required',
            'productPrice' => 'required',
            'productCategory' => 'required',
            'productImage' => 'image|nullable|max:1999',
        ]);

        $products = Products::find($request->input('id'));
        $products->productName = $request->input('productName');
        $products->productPrice = $request->input('productPrice');
        $products->productCategory = $request->input('productCategory');
        
        if($request->hasFile('productImage')){
            $fileNameWithExt = $request->file('productImage')->getClientOriginalName();
           //  get file name
           $fileName= pathinfo($fileNameWithExt,PATHINFO_FILENAME);
           $extension = $request->file('productImage')->getClientOriginalExtension();
       //   store filename in database
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;
// store image in folder
           $path = $request->file('productImage')->storeAs('public/productImages',$fileNameToStore);
           
          // remove image which post has been deleted from the folder
           if($products->productImage != 'noimage.png'){
             Storage::delete('public/productImages/'.$products->productImage);
           }
           $products->productImage =$fileNameToStore;
           }

           $products->update();
        return redirect('view-products')->with('status','Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();
    return back()->with('status','Product deleted successfully');
    }
}
