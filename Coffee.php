<?php

require 'Controller/CoffeeController.php';
$coffeeController = new CoffeeController();

if(isset($_POST['types']))
{
    //Fill the page with coffees of selected types.
    $coffeeTables = $coffeeController->CreateCoffeeTables($_POST['types']);
}
else
{
    //Page is loaded first time, no type selected -> Fetch all types
    $coffeeTables = $coffeeController->CreateCoffeeTables('%');

}

//Output Page Data
$title = 'Coffee Overview';
$content = $coffeeController->CoffeeDropdownList() . $coffeeTables;

include 'Template.php';
 ?>
