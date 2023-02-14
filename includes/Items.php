<?php
// author: Alex Buck
// Items.php

$myItem = new Item(1, "Classic Cheesesteak", "Grade A steak, topped with provolone cheese, green peppers and onions", 10.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(2, "Chicken Cheesesteak", "Seasoned chicken breast, topped with provolone cheese, green pepper and onions", 9.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(3, "Veggie Cheesesteak", "Green, red, and orange peppers, onions, mushrooms, topped with provolone cheese", 8.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(4, "Chipotle Cheesesteak", "Grade A steak, topped with provolone cheese, green peppers, onions, and our house chipotle mayo", 11.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(5, "Chicken Chipotle Cheesesteak", "Seasoned chicken breast, topped with provolone cheese, green peppers, onions, and our house chipotle mayo", 10.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(6, "Veggie Chipotle Cheesesteak", "Green, red , and orange peppers, onions, mushrooms, topped with provolone cheese and our house chipotle mayo", 9.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(7, "Garlic Cheese Bread", "House baked bread topped with garlic butter and parmesan cheese", 5.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;

$myItem = new Item(8, "French Fries", "House cut french fries!", 4.95);
$myItem->addExtra("Hot Sauce", "1.00");
$myItem->addExtra("Bacon", "1.00");
$myItem->addExtra("Garlic", "1.00");
$myItem->addExtra("Banana Peppers", "1.00");
$items[] = $myItem;



class Item {
    public $ID = 0;
    public $Name = "";
    public $Description = "";
    public $Price = 0;
    //public $Quantity = 0;
    public $Extras = array();

    public function __construct($ID, $Name, $Description, $Price) {
        $this->ID = $ID;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Price = $Price;
    } // end of Item constructor

    public function addExtra($extra, $price) {
        $this->Extras[$extra] = $price;
    }

} //end of Item class