<?php include 'includes/Items.php';
      include 'includes/Cart.php';
      
      $cart = new Cart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck's Cheesesteaks</title>
</head>
<body>
    <header>
        <div class="inner-header">
            <h1>Chuck's Cheesesteaks</h1>
        </div>
    </header>
    <div id="wrapper">
        <main>
            <h1>Welcome to Chuck's Cheesesteaks!</h1>
            <h2>Please select Items from our menu:</h2>
            <div class="row">
                <section class="column">
                    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                        <?php
                            foreach($items as $Item){
                                echo '<div class="menu_Item">
                                        <label>
                                            <h2 class="subheader">'.$Item->Name.'</h2>
                                            <p>'.$Item->Description.'</p>
                                            <select Name="'.$Item->Name.'" required title="0" tab index="15">
                                                <option value="0">Please choose a quantity</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </label>
                                        <label><h3>Add extras (all $1, applies to whole quantity):</h3></label>
                                        <ul>
                                        <li><input type="radio" name="extra" value="1.00">Hot Sauce</li>
                                        <li><input type="radio" name="extra" value="1.00">Bacon</li>
                                        <li><input type="radio" name="extra" value="1.00">Garlic</li>
                                        <li><input type="radio" name="extra" value="1.00">Banana Peppers</li>
                                        </ul>
                                    </div>';
                                    if(isset($_POST[str_replace(' ', '_',$Item->Name)])){
                                        if($_POST[str_replace(' ', '_',$Item->Name)] > 0){
                                            $Item->Quantity = intval($_POST[str_replace(' ', '_',$Item->Name)]);
                                        }
                                    }
                            }
                        ?>
                        <div class="submit">
                            <input type="Submit" id="submit" value="Total Up Your Order!"/>
                        </div>
                        <section class="cart">
                            <h1>Your Cart:</h1>
                            <p>
                                <?php
                                foreach($items as $Item){
                                    if($Item->Quantity > 0){
                                        $output = '<b>'.$Item->Name.'</b></br>';
                                        $output .= $Item->Quantity.' x $'.number_format($Item->Price, 2);
                                        $output .= ' = ';
                                        $output .= '$'.number_format($Item->Quantity*$Item->Price, 2).'</br>';
                                        echo $output;
                                    }
                                }
                                echo ''
                                ?>
                            </p>
                            <p>
                                Subtotal = <?php '$'.number_format($cart->getSubtotal($items));?>
                            </p>
                            <p>
                                Tax = <?php '$'.number_format($cart->getTax($items));?>
                            </p>
                            <p>
                                <b>Total</b> = <?php '$'.number_format($cart->getTotal($items));?>
                            </p>
                        </section>
                    </form>
                </section>
            </div>
        </main>
    </div>
</body>
</html>