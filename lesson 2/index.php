<?php 
    // strings
    $name = "Menezes";
    $food = "pizza";
    $email = "fake123@gmail.com";

    // integers
    $age = 16;
    $users = 2;
    $quantity = 4;

    // floats (decimal numbers)
    $gpa = 2.5;
    $price = 5.99;
    $tax_rate = 5.1;

    // booleans
    $employed = true;
    $online = false;
    $for_sale = true;

    // null
    $total = null;

    echo "Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    echo "You are {$age} years old <br>";
    echo "There are {$users} users online";
    echo "You would like to buy {$quantity} items<br>";

    echo "Your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "The sales tax rate is: {$tax_rate}<br>";

    echo "You have ordered {$quantity} x {$food}<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}<br>";

    echo "Online status: {$online}<br>";
 
?>