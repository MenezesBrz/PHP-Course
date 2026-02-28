<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #111;
            color: white;
        }
    </style>

</head>
<body>
        <form action="index.php" method="post">
            <label>radius:<label>
            <input type="texto" name="radius">
            <input type="submit" value="calculate">
        </form><br>
        




  <!---  <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
         <br>
        <label>y:</label>
        <input type="text" name="y"> 
        <br>
        <label>z:</label>
        <input type="text" name="z"> <br>
        <input type="submit" value="total">
    </form> -->
</body>
</html>
<?php

    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Area ={$area}cm^2 <br>";
    echo "Volume = {$volume}cm^3 <br>";

    
    // ===================================================================================


    //$x = $_POST["x"];
    //$y = $_POST["y"];
    //$z = $_POST["z"];
    //$total = null;

    // $total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);

    //$total = pow($x, $y);
    //$total = sqrt($x); //squareroot

    //$total = max($x, $y, $z);
    //$total = min($x, $y, $z);
    //$total = pi();
    //$total = rand(1, 500);
    //echo $total;


// ===================================================================================


// $_GET, $_POST = special variables used to collect data from an HTML form 
//                 data is sent to the file in the action attribute of <form>
//                 <form action="some_file.php" method="get">
    
// $_GET = Data is appended to the url
//         NOT SECURE
//         char limit
//         Bookmark is possible w/ values
//         GET requests can be cached
//         Better for a search page

//$_POST = Data is packaged inside the body of the HTTP request
//         MORE SECURE
//         No data limit
//         Cannot bookmark 
//         GET requests are not cached
//         Better for submitting credentials 

?>
