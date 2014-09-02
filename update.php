<?php
session_start();

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("example") or die(mysql_error());

if( isset( $_POST['update'] ) ){
    $id = $_POST['id'];
    $email = $_POST['email'];
    mysql_query("UPDATE students SET email = '$email' WHERE id = '$id'")
    or die(mysql_error());
     
    $message = "Record updated successfully";
    $_SESSION['added'] = $message;
    header('location:index.php');
    exit();
}
?>