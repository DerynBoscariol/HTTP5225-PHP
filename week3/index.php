<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>
<body>
    <?php
       /* $hour = date('H');
        echo($hour);
        if ($hour < 12){
            echo'Good Morning!';
        }
        else {
            echo'Good Afternoon!';
        }

        $day = date('D');
        echo $day; */

        /*
        $hour = rand(1,24);
        echo $hour . "<br>";
        
        if ($hour < 12) {
            echo 'Good Morning!';
        } 
        else if ($hour >= 12 && $hour <= 16){
            echo 'Good Afternoon!';
        }
        else if ($hour > 16 && $hour < 20){
            echo 'Good Evening!';
        } 
        else if ($hour >= 20) {
            echo 'Goodnight!';
        } */

        /* IN CLASS ACTIVITY */

        $magic = rand(1,20);
        echo $magic . '<br>';

        if ($magic % 3 == 0 && $magic % 5 == 0) {
            echo 'FizzBuzz';
        } else if ($magic % 3 == 0){
            echo 'Fizz';
        } else if ($magic % 5 == 0) {
            echo 'Buzz';
        } else {
            echo 'Magic number is ' . $magic;
        }

    ?>
</body>
</html>