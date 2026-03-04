<?php 


    // switch = replacement to using many elseif statement
    //          more efficient, less code to write

    $grade = 'Pizza';

    if($grade == 'A'){
        echo 'You did great <br>';
    } elseif($grade == 'B') {
        echo 'You did good <br>';
    } elseif($grade == 'C') {
        echo 'You did okay <br>';    
    } elseif($grade == 'D') {
        echo 'You did poorly <br>';
    } elseif($grade == 'F') {
        echo 'You failed <br>';
    } else {
        echo ' {$grade} is not a valid grade <br> ';
    }

    switch($grade){
        case "A":
            echo "You did great <br>";
            break;
        case "B";
            echo "You did good <br>"; 
            break;
        case "C";
            echo "You did okay <br>";   
            break;
        case "D";
            echo "You did poorly <br>";
            break;
        case "F";
            echo "You failed <br>";
            break;
        default: 
            echo "{$grade} is not valid <br>";              
    }   

    $date = date("l");

    switch($date) {
        case "Monday":
            echo "I don't like Mondays";
            break;
        case "Tuesday":
            echo " It is Taco Tuesday";
            break;
        case "Wednesday":
            echo "The work week is half over";
            break;  
        case "Thursday":
            echo "It's almost the weekend";
            break;
        case "Friday":
            echo "The weekend is here";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
        case "Sunday":
            echo "Time to relax";
            break;           
        default: 
            echo "{$date} is not a day";                       

    }