<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database connection - PHP</title>
        <!--Adding bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            $connect = mysqli_connect('localhost', 'root', 'root', 'PHPWeek5'); // connecting to database
            
            if(!$connect){
                echo 'Error code:' . mysqli_connect_errno(); // optional error handling
                echo 'Error code:' . mysqli_connect_error();
                exit;
            }

            $query = 'SELECT `Name`, `Hex` FROM colors'; //query you want to run
            $results = mysqli_query($connect, $query); // running the query with the connection string

            if(!$results){
                echo 'Error Message: ' . mysqli_error($connect); // will go to your connected database and find last error message
            } else {
                echo 'The query found ' . mysqli_num_rows($results);
/*
                for ($i = 0; $i < mysqli_num_rows($result); $i++){
                $hexQuery = 'SELECT `Hex` FROM colors';
                $nameQuery = 'SELECT `Name` FROM colors';
                $hex = mysqli_query($connect, $hexQuery);
                $name = mysqli_query($connect, $nameQuery);
                echo ' <div style="height: 10px; width: 100px; background-color: ' . mysqli_fetch_assoc($hex) . ' > ' . mysqli_fetch_assoc($name) . '</div>';
        } } */
        foreach ($results as $result){
            echo '<h2>' . $result['Name'] . '</h1>';
            echo '<div style="height: 10px; width: 100px; background-color: ' . $result['Hex'] . '"> </div>';
        }
    }
        ?>

    </body>