<?php
 
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
<form action="update.php" method="post">
    <label for="email">Email:</label>
    <input type="hidden" name="id" value="<?php echo $data->id?>">
    <input type="text" name="email" value="<?php echo $data->email ?>"/>
    <input type="submit" value="Update" name="update"/>
</form>
</body>
</html>