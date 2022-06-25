<?php

namespace App\Http\Controllers;

use App\cart as AppCart;
use App\Cart;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Ui\Presets\React;

class clientController extends Controller
{
   public function home(){
     $products = Products::orderBy('id','DESC')->take(8)->get();
     $countPrintingProducts = Products::where('productCategory','=','Paper and Printing Products')->count();
     $countOfficeFurniture = Products::where('productCategory','=','Office Funiture And Decor Products')->count();
     $countOfficeEquipments = Products::where('productCategory','=','Office Equipment Products')->count();
     $allProducts = Products::count();
     $countDesktopProducts = Products::where('productCategory','=','Desktop and Deskdrawer Products')->count();
     $countKitchenProducts = Products::where('productCategory','=','Office and Kitchen Products')->count();
       return view('clients.index')->with('products',$products)->with('countPrintingProducts',$countPrintingProducts
                                  )->with('countOfficeFurniture',$countOfficeFurniture
                                  )->with('countOfficeEquipments',$countOfficeEquipments
                                  )->with('allProducts',$allProducts
                                  )->with('countDesktopProducts',$countDesktopProducts
                                  )->with('countKitchenProducts',$countKitchenProducts);
   }

   public function shop(){
    $products = Products::paginate(16);
    return view('clients.shop')->with('products',$products);
   }
  //  view details of a particular product by the id
   public function details($id){
    $details = Products::find($id);
    $youmaylike = Products::orderBy('id','ASC')->take(8)->get();
    return view('clients.details')->with('details',$details)->with('youmaylike',$youmaylike);
   }

  // display all paper and printing products
  public function paperProducts()
  {
    $paperProducts = Products::where('productCategory','=','Paper and Printing Products')->paginate(16);
    return view('clients.paperProducts')->with('paperProducts',$paperProducts);

  }
  // display all Office Funiture And Decor Products
  public function officeFurniture()
  {

    $officeFurnitures = Products::where('productCategory','=','Office Funiture And Decor Products')->paginate(16);
    return view('clients.officeProducts')->with('officeFurnitures',$officeFurnitures);

  }
  // display all Office office Equipments Products
  public function officeEquipments()
  {

    $officeEquipments = Products::where('productCategory','=','Office Equipment Products')->paginate(16);
    return view('clients.officeEquipments')->with('officeEquipments',$officeEquipments);
  }
  // display all Desktop & Deskdrawer Products
  public function drawerProducts()
  {

    $drawerProducts = Products::where('productCategory','=','Desktop and Deskdrawer Products')->paginate(16);
    return view('clients.drawerProduct')->with('drawerProducts',$drawerProducts);
  }
  // display all kitchen Products
  public function kitchenProducts()
  {

    $kitchenProducts = Products::where('productCategory','=','Office and Kitchen Products')->paginate(16);
    return view('clients.kitchenProducts')->with('kitchenProducts',$kitchenProducts);
  }
  // display all Products
  public function allProducts()
  {

    $allProducts = Products::paginate(16);
    return view('clients.allProducts')->with('allProducts',$allProducts);
  }

  public function addCart($id)
  {
    $products = Products::find($id);

    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($products,$id);
    Session::put('cart',$cart);
    return back();

  }


  public function cart(){
    // $categories = Category::all();
      if(!Session::has('cart')){
          return redirect('/');
      }
   $oldCart = Session::has('cart') ? Session::get('cart') : null;
   $cart = new cart($oldCart);
return view('clients.cart',['products'=>$cart->items]);
// ->with('categories',$categories);

}

public function updateQuantity(Request $request, $id)
{
  $oldCart = Session::has('cart') ? Session::get('cart') : null;
  $cart = new Cart($oldCart);
  $cart->updateCart($id,$request->quantity);
  Session::put('cart',$cart);

  return back();

}

public function deleteCart($id)
{
  $oldCart = Session::has('cart')?Session::get('cart') : null;
  $cart = new Cart($oldCart);
  $cart->removeItem($id);

  if(count($cart->items) > 0){
    Session::put('cart',$cart);
  }else{
    Session::forget('cart');
  }
  return back();

}


}
