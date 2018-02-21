<?php
include('admin/connect.php');
$get_id=$_GET['id'];

 $query = mysql_query("select * from applicants where aid = '$get_id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $cid = $row['company_id'];
                                $sid = $row['student_id'];
							    $sname = $row['studentname'];
								$vid = $row['vacancy_id'];
								$vname = $row['vacancy_name'];
								
							}
							
							  mysql_query("insert into accepted (sid,cid,sname,position) values('$sid','$cid','$sname','$vname')") or die(mysql_error());
							
							mysql_query("delete from applicants where aid='$get_id'")or die(mysql_error());
							
							header('location:company_accepted.php');
							   
                                ?>


