<?php
include('admin/connect.php');

$get_id=$_GET['id'];

mysql_query("delete from services where service_id='$get_id'")or die(mysql_error());
header('location:company_approved.php');
?>
