<?php session_start();?>
<html>
    <head></head>
    <body>
    <?php if(isset($_SESSION['added'])){
        $message = $_SESSION['added'];
    ?>
    <div style="color: green"><?php echo $message;?></div>
    <?php 
    session_unset();
}?>

    <?php if(isset($_SESSION['deleted'])){
        $message = $_SESSION['deleted'];
    ?>
    <div style="color: red"><?php echo $message;?></div>
    <?php 
    session_unset();
    }?>
<table>
    <tr>
        <th>Serial</th>
        <th>Email</th>
        <th colspan="2">Actions</th>
    </tr>
    
	<?php
	
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("example") or die(mysql_error());
	$query= mysql_query("SELECT id,email from students");
    $i = 0;
	
	while($list=mysql_fetch_object($query)){
	
			echo "<tr>";
			echo"<td>".++$i."</td>";
			echo"<td>".$list->email."</td>";
			echo"<td>"."<a href='details.php?id=".$list->id."'><button>detail</button></a>"."</td>";
			echo"<td>"."<a href='edit.php?id=".$list->id."'><button>Edit</button></a>"."</td>";
			echo"<td>"."<a href='delete.php?id=".$list->id."'><button>Delete</button></a>"."</td>";
			echo "</tr>";
	}
	
	?>
	
	
</table>
<a href="create.php"><button>Create New</button></a>
        </body>
    </html>