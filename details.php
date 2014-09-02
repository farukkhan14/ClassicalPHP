<?php
session_start();

mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("example") or die(mysql_error());

$ID = $_GET['id'];

$query = "SELECT * FROM students WHERE id='$ID'";
$result = mysql_query($query);
$data = mysql_fetch_object( $result );
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
    <label for="id">ID: </label><?php echo $data->id ?>
    <br/>
    <label for="email">Email: </label><?php echo $data->email ?>
    <br/>
    <a href="index.php">Back to List</a>
</body>
</html>