<?php
include('admin/connect.php');
//$get_id=$_GET['id'];

$content = $_POST['cont'];
$sid= $_POST['sid'];

  mysql_query("insert into reports (sid,content) values('$sid','$content')") or die(mysql_error());
							
?>


