<?php
var_dump($_POST);

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);

echo "</pre>";

die();





session_start();

$email = $_POST["email"];

if(empty($_POST['email']) ){
    $message = "Email field cannot be empty";
    $_SESSION['message'] = $message;
    header('location:create.php');
    exit();
}

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("example") or die(mysql_error());
//var_dump($_POST);
$query = "INSERT into students (email) values ('$email')";

if (mysql_query($query))
{
    echo 'Data Inserted successfully...';
}
?>

<a href="index.php"> <input type="submit" value="Go back to list"/></a>