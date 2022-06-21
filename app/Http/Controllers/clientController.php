<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

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

    return view('clients.shop');
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
    $paperProducts = Products::where('productCategory','=','Paper and Printing Products')->paginate(20);
    return view('clients.paperProducts')->with('paperProducts',$paperProducts);

  }
  // display all Office Funiture And Decor Products
  public function officeFurniture()
  {

    $officeFurnitures = Products::where('productCategory','=','Office Funiture And Decor Products')->paginate(20);
    return view('clients.officeProducts')->with('officeFurnitures',$officeFurnitures);

  }
  // display all Office office Equipments Products
  public function officeEquipments()
  {

    $officeEquipments = Products::where('productCategory','=','Office Equipment Products')->paginate(20);
    return view('clients.officeEquipments')->with('officeEquipments',$officeEquipments);
  }
  // display all Desktop & Deskdrawer Products
  public function drawerProducts()
  {

    $drawerProducts = Products::where('productCategory','=','Desktop and Deskdrawer Products')->paginate(20);
    return view('clients.drawerProduct')->with('drawerProducts',$drawerProducts);
  }
  // display all kitchen Products
  public function kitchenProducts()
  {

    $kitchenProducts = Products::where('productCategory','=','Office and Kitchen Products')->paginate(20);
    return view('clients.kitchenProducts')->with('kitchenProducts',$kitchenProducts);
  }
  // display all Products
  public function allProducts()
  {

    $allProducts = Products::paginate(24);
    return view('clients.allProducts')->with('allProducts',$allProducts);
  }

}
