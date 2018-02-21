<?php
include('connect.php');


$get_id=$_GET['id'];

mysql_query("update company set status='Pending' where cid='$get_id'")or die(mysql_error());
header('location:company.php');

?>