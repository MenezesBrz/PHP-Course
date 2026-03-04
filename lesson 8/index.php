<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <!-- <label>Enter a number to count to</label>
        <input type="text" name="counter">
        <input type="submit" value="start"> -->
        
        <label>Enter a number to down to</label>
        <input type="text" name="down_counter">
        <input type="submit" value="start">
    </form>
</body>
</html>
<?php 
     // for loop = repeat some code a certain # of times

        //for($i = 10; $i > 0; $i-=2){
        //    echo $i . "<br>";
        //}

        $counter = $_POST["counter"];
        $down_counter = $_POST["down_counter"];

        for($i = 1; $i <= $counter; $i++  ){
            echo $i . "<br>"; 
        }

        for($i = $down_counter; $i > 0; $i--  ){
            echo $i . "<br>"; 
        }

?>