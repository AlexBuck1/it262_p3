<?php

// create a class for Cart

class Cart {
    // establish sales tax variable
    public $SALES_TAX = 0.09;

    public function __construct(){

    }

    // create function for subtotal (total without tax) for items added to the cart

    public function getSubtotal($itm_array){
        $subTotal = 0.0;
            foreach ($itm_array as $Item){
                $subTotal += ($Item->Price * $Item->Quantity);
            }
            return $subTotal;
    }

    // create function for tax for all items in the cart

    public function getTax($itm_array){
        $tax = ($this->getSubtotal($itm_array) * $this->SALES_TAX);
        return $tax;
    }

    // create function for cart total plus tax

    public function getTotal($itm_array){
        $total = ($this->getTax($itm_array) + $this->getSubtotal($itm_array));
        return $total;
    }
} // end class