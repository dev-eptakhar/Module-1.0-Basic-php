<!DOCTYPE html>
<html lang="en">

<?php
    $number = $_POST['number'];
    $check = $_POST['check'];
    if(isset($check)){
        
        if( $number <= 40 ){
            echo "you grade F";
        }elseif( $number <= 44 ){
            echo "you grade d";
        }elseif( $number <= 49 ){
            echo "you grade C";
        }
        elseif( $number <= 54 ){
            echo "you grade C+";
        }elseif( $number <= 59 ){
            echo "you grade B-";
        }
        elseif( $number <= 64 ){
            echo "you grade B";
        }elseif( $number <= 69 ){
            echo "you grade B+";
        }elseif( $number <= 74 ){
            echo "you grade A-";
        }elseif( $number <= 79 ){
            echo "you grade A";
        }elseif( $number <= 100 ){
            echo "you grade A+";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>What is your grad check Now</h1>
    <form action="operatorsPro.php" method="post">
        <input type="text" name="number" id="grad" placeholder="Your Number">
        <input type="submit" value="check" name= "check">
    </form>
</body>
</html>