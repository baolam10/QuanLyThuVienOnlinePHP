<?php

namespace App;

class Cart
{
    public $sanpham = null;
    public $TongSL = 0;
    public $TongTien= 0;

    public function __construct($cart){
        if($cart){
            $this->sanpham = $cart->sanpham;
            $this->TongSL = $cart->TongSL;
            $this->TongTien = $cart->TongTien;
            
        }
    }

    public function AddCart($product, $id){

        $newSanpham = ['quanty'=>0,'ttsanpham'=>$product];
        if($this->sanpham){
            if(array_key_exists($id, $this->sanpham)){
                $newSanpham = $this->sanpham[$id];
            }
        }
        $newSanpham['quanty']++;
        // $newSanpham['price']= $newSanpham['quanty'] ;
        $this->sanpham[$id] = $newSanpham;
        $this->TongSL++;
        // $this->TongTien =0;
    }

    public function DeleteItemCart($id){
        $this->TongSL -= $this->sanpham[$id]['quanty'];
        unset($this->sanpham[$id]);
    }

    public function UpdateItemCart($id, $quanty){
        $this->TongSL -= $this->sanpham[$id]['quanty'];
        $this->sanpham[$id]['quanty'] = $quanty;
        $this->TongSL += $this->sanpham[$id]['quanty'];
    }
}
