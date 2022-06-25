<?php
namespace App;
class cart{

    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if($oldCart){
          $this->items = $oldCart->items;
          $this->totalQuantity = $oldCart->totalQuantity;
          $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item,$productId){
        $storedItem = ['qty'=>0,'productId'=>0,'productName'=>$item->productName,
        'productPrice' => $item->productPrice,'productImage'=>$item->productImage,
        'item'=>$item];

        //   if($this->items){
        //     if(array_key_exists($productId,$this->items)){
        //         $storedItems = $this->items[$productId];
        //if item is already in shopping cart
        if (isset($this->items) ? $this->items : false) {
            if (array_key_exists($productId, $this->items)) {
                $storedItem = $this->items[$productId];
            }
        }


        $storedItem['qty']++;
        $storedItem['productId']= $productId;
        $storedItem['productName']= $item->productName;
        $storedItem['productPrice']= $item->productPrice;
        // $storedItem['mPrice']= $item->productPrice * $storedItem['qty'];
        $storedItem['productImage']= $item->productImage;
        $this->items[$productId] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->productPrice;


    }


    public function updateCart($id, $qty){
    
        $this->totalQuantity -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'] * $this->items[$id]['qty'];
        $this->items[$id]['qty'] = $qty;
        $this->totalQuantity += $qty;
        $this->totalPrice += $this->items[$id]['productPrice']*$qty;        
    }


    public function removeItem($id){
        $this->totalQuantity -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['productPrice'] * $this->items[$id]['qty'];
        unset($this->items[$id]);
    }
}
?>