<?php

include 'conn.php';
$id = $_REQUEST['delete'];

$query = mysqli_query($conn,"delete  from menus where id =  '$id'");

if ($query) {
	header("location:menu.php");?>
	
<?php

}


?>