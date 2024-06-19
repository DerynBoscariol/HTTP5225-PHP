<?php 
    //print_r($_POST);  Do this to check what the data looks like coming in
    //Array ( [schoolName] => TEST NAME [schoolLevel] => TEST TYPE [phone] => TEST PHONE [email] => test@email.com )

    if (isset($_POST['addSchool'])){ //isset determines whether or not the variable was set, does not pass value
    //Assigning data(using name tag from form) into local variables
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    //Connection String
    include('../reusable/con.php');

    //Writing query to insert data into database table
    $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES ('$schoolName', '$schoolLevel', '$phone', '$email')"; 
    //use back ticks for column names(not single quotes), especially for ones with spaces - prevents sql injections

    //extecuting query with connection string
    $school = mysqli_query($connect, $query);

    //Error handling - if successful, redirect to home - if failed display the error
    if($school){
        header("Location: ../index.php"); //redirects to homepage
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You should not be here!";
}
?>