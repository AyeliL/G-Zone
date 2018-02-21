<?php
include('connect.php');
$get_id=$_GET['id'];

mysql_query("delete from tb_clients where client_id='$get_id'")or die(mysql_error());
header('location:client_assigned.php');

?>