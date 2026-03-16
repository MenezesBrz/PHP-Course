<?php
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()  

  /*  function happy_birthday($age, $first_name){
        //$age = 16;
        //$first_name = "Isaque";

        echo" Happy Birthday dear {$first_name}! <br>";
        echo" Happy Birthday to you! <br>";
        echo" Happy Birthday dear {$first_name}! <br>";
        echo" You are {$age} years old! <br> <br>";
    }; 

    happy_birthday("16","Isaque"); */

/*   function is_even($number){
        return $number % 2;
    }; 

    echo is_even(11);*/

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(3, 4);
?>