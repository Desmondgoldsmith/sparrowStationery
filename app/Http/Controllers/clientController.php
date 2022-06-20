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
     $countCleaningProducts = Products::where('productCategory','=','Cleaning and Janitorial Products')->count();
     $countDesktopProducts = Products::where('productCategory','=','Desktop and Deskdrawer Products')->count();
     $countKitchenProducts = Products::where('productCategory','=','Office and Kitchen Products')->count();
       return view('clients.index')->with('products',$products)->with('countPrintingProducts',$countPrintingProducts
       )->with('countOfficeFurniture',$countOfficeFurniture
       )->with('countOfficeEquipments',$countOfficeEquipments
       )->with('countCleaningProducts',$countCleaningProducts
       )->with('countDesktopProducts',$countDesktopProducts
       )->with('countKitchenProducts',$countKitchenProducts);
   }

   public function shop(){

    return view('clients.shop');
   }
   
   public function details($id){
    $details = Products::find($id);
    $youmaylike = Products::orderBy('id','ASC')->take(8)->get();
    return view('clients.details')->with('details',$details)->with('youmaylike',$youmaylike);
   }
}
