<?php
// cart configuration
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['Quantity'])) {
      $Quantity = $_POST['Quantity'];
      $total_qty = 0;
      foreach($Quantity as $qty){
        $total_qty += $qty;
      }
      if($total_qty == 0){
        echo '<p>Error: Choose a Quantity.</p>';
      } else {
        $extras = $_POST['extras'];
        $total = 0;
        foreach ( $Quantity as $id => $qty ) {
          if (is_numeric($qty) && $qty > 0 ) {
            $Item = $items[$id - 1];
            $itemTotal = number_format($qty * $Item->Price, 2);
            echo '<b>'.$Item->Name.' x '.$qty.'</b> = '.$itemTotal.'<br>';
            $extra_subtotal = 0;
            if(isset($extras[$id])) {
              foreach($extras[$id] as $extra) {
                $extra_subtotal += $qty * $Item->Extras[$extra];
                echo 'Extra: '.$extra.' ($'.number_format($Item->Extras[$extra], 2).') x '.$qty.'<br>';
              }
            }
            
            echo 'Extra(s) subtotal:  = $'.number_format($extra_subtotal, 2).'<br>';
            $itemTotal += $extra_subtotal;
            echo 'Item Total: $'.number_format($itemTotal, 2).'<br><br>';
            $tax = 0.095;
            //$subTotal = $itemTotal += $extra_subtotal;
            $subTotal += $itemTotal;
            $cart_tax = $subTotal * $tax;
            $total  = $subTotal + $cart_tax;
          }
        }
        echo '<p>Subtotal: $'.number_format($subTotal, 2).'</p>';
        echo '<p>Sales Tax: $'.number_format($cart_tax, 2).'</p>';
        echo '<p>Total: $'.number_format($total, 2).'</p>';
      }
    } else {
      echo '<p>Error: Choose a Quantity.</p>';
    }
  }








?>