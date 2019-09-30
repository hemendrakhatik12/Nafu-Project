<?php

$conn = mysqli_connect('localhost','root','','myadmin');
$id = $_REQUEST['delete'];

$query = mysqli_query($conn,"delete  from menus where id =  '$id'");

if ($query) {
	header("location:add_menu.php");
}


?>