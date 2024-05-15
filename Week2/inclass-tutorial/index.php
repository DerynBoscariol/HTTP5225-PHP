<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <?php echo 'Hello'; ?>

    <?php echo '<h1>Welcome to HTTP 5225 (in PHP)</h1>'; ?>
    <?php echo '<p>Learning about PHP is fun, isn\'t it<p>'; ?>

    <h1>Welcome to HTTP 5225 (in html)</h1>
    <p>We will learn PHP in this class</p>
    <p>Things we will learn in this class</p>

    <?php 
    echo'
    <ul>
        <li>PHP</li>
        <li>mySQL</li>
        <li>Laravel</li>
    </ul>';
    ?>

    <img src="<?php echo 'https://dogtime.com/wp-content/uploads/sites/12/2020/11/GettyImages-512366437-e1688677726208.jpg?w=1024';?>" alt="Placeholder image">

    <?php 
    $fname = 'Deryn';
    $lname = 'Boscariol';
    echo 'Hello' . ' ' . $fname . ' ' . $lname;

    //Arrays can be declared in two ways
    $name['fname'] = 'Deryn'; //associated array
    $name = array('Deryn', 'Boscariol') //proper array
    ?>

</body>
</html>