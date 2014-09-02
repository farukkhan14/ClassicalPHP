<?php
session_start();
/*
var_dump($_POST);

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);

echo "</pre>";

die();

*/


//collect the data
$email = $_POST["email"];

//validate
if(empty($_POST['email']) ){
    $message = "Email field cannot be empty";
    $_SESSION['message'] = $message;
    header('location:create.php');
    exit();
}

//sanitize data

$email = mysqli_real_escape_string($conn, $email);

//coonect to database
$conn = mysqli_connect("localhost", "example", "example","example") or die(mysqli_connect_error());

//prepare query
$query = "INSERT into students (email) values ('$email')";

//insert data
if (mysqli_query($conn, $query)) //if successfull
{
    $_SESSION['message']  = "Data is inserted successfully";
    header('location:index.php');
    exit();
}
else
{ //failed
    $_SESSION['message'] = mysqli_error($conn);
    header('location:create.php');
    exit();
}
?>

