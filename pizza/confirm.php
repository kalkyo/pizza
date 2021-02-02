<?php
    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('includes/head.html');
?>
<body>

<div class="container" id="main">

    <?php

    /*// Autoglobal array
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";*/

//  var_dump($_POST); //Used to print an array $_GET is the name of the Array

    /*
       ["fname"]=> string(4) "swag"
       ["lname"]=> string(4) "Eang"
       ["address"]=> string(15) "1346 32nd PL NE"
       ["method"]=> string(6) "pickup"
       ["toppings"]=>
          array(3) {
          [0]=> string(7) "sausage"
          [1]=> string(9) "pineapple"
          [2]=> string(14) "canadian-bacon"
                }
       ["size"]=> string(5) "large"
       */
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $method = $_POST['method'];
    $toppings = $_POST['toppings'];
    $size = $_POST['size'];
    echo "<h1>Thank you for your order,$fname!</h1>";
//        echo "<h1>Thank you for your order,".$_POST['fname']."!</h1>";

    echo "<h4>Order Summary:</h4>";
    echo "<p>Name: $fname $lname</p>";
    if ($method == 'delivery')
    {
        echo "<p>Address: $address</p>";

    }
    echo "<p>Method: $method</p>";
    echo "<p>Toppings: ".implode(", ",$toppings)."</p>"; // Convert array to string
    echo "<p>Size: $size</p>";

    ?>

</div>
</body>
</html>