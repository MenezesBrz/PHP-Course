<?php 
    // ! / && / ||

    $temp = 15;
    $cloudy = false;

    if($temp < 0 || $temp > 30) {
        echo"weather is bad<br>";
    } else {
        echo"weather is good<br>";
    }

    if($cloudy) {
        echo"It's sunny <br>";
    } else {
        echo"It's cloudy<br>";
    }

    $age = 25;
    $citizen = true;

    if(!$age >= 18 && !$citizen){
        echo"You cannot vote <br>";
    } else {
        echo"You can vote <br>";
    }

    $child = false;
    $senior = true;
    $ticket = null;
    
    if($child || $senior){
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";
?>