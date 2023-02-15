<?php include 'includes/Items.php';

      

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck's Cheesesteaks</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <header>
        <div class="inner-header">
            <h1>Chuck's Cheesesteaks</h1>
        </div>
    </header>
    <div id="wrapper">
        <main>
            <h2 class="welcome">Welcome to Chuck's Cheesesteaks!</h2>
            <h3>Please select Items from our menu:</h3>
                <section class="column">
                    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                        <?php
                            foreach($items as $Item){
                                echo '<div class="menu_Item">
                                <fieldset>
                                        <label>
                                            <h2 class="subheader">'.$Item->Name.'</h2>
                                            <p>'.$Item->Description.'</p>
                                            <p><b>$'.$Item->Price.'</b></p>
                                            <select name="Quantity['.$Item->ID.']" value="'.(isset($Quantity[$Item->ID]) ? $Quantity[$Item->ID] : 0).'">
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
                                </fieldset>
                                        </label>
                                        </div>'
                                     ?>
                        <div class="add">
                        <label><b>Add Extras:</b></label>
                        <?php
                            foreach($Item->Extras as $extra => $price) {
                                echo '<div class="extras">
                                <ul>
                                <li>
                                  <input type="checkbox" name="extras['.$Item->ID.'][]" value="'.$extra.'" '.'>'.$extra.' ($'.$price.')</input>
                                </li>
                                </ul>
                                </fieldset>
                                <br>
                                </div>';
                              }
                                   
                            }
                        ?>
                        </div>
                        <div class="submit">
                            <input type="Submit" id="submit" value="Total Up Your Order!"/>
                        </div>
                        <section class="cart">
                            <fieldset>
                            <h1>Your Cart:</h1>
                            <p>
                                <?php
                                include 'includes/Cart.php'
                                ?>
                            </p>
                        </fieldset>
                         </section>
                    </form>
                </section>
        </main>
    </div>
</body>
</html>