<?php

require("Entities/CoffeeEntity.php");
class CoffeeModel {

    function GetCoffeeTypes() {
        require 'Credentials.php';

        //Open connection and Select database.

        $con = mysqli_connect($host,$user,$passwd,$database) or die(mysqli_connect_error());

        $result = mysqli_query($con,"SELECT DISTINCT type FROM coffee") or die(mysqli_error());
        $types = array();

        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            array_push($types, $row[0]);
        }
        mysqli_close();
        return $types;
    }


    //Get CoffeeEntity objects from database and return them in an array.
    function GetCoffeeByType($type) {
        require 'Credentials.php';

        //Open connection and select database.
        $con = mysqli_connect($host,$user,$passwd,$database) or die(mysqli_connect_error());

        $query = "SELECT * FROM coffee WHERE type LIKE '$type'";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        $coffeeArray = array();

        //Get data from database.
        while($row = mysqli_fetch_array($result))
        {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $roast = $row[4];
            $country = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Create coffee objects and store them in an array.
            $coffee = new CoffeeEntity(-1, $name, $type, $price, $roast, $country, $image, $review);
            array_push($coffeeArray,$coffee);
        }
        //Close connection and return the result.
        mysqli_close();
        return $coffeeArray;
    }

}
 ?>
