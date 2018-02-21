<?php
include('admin/connect.php');
$get_id=$_GET['id'];

		 
							
							mysql_query("delete from applicants where aid='$get_id'")or die(mysql_error());
							
							header('location:company_applicants.php');
							   
                                ?>


