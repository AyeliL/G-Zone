<?php
include('header.php');
include ('session.php');
$student_query = mysql_query("select * from company where cid='$session_id'") or die(mysql_error());
$teacher_row = mysql_fetch_array($student_query);
?>

<body>

    <?php include('navhead_user.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                        <ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                        <li   >
                            <a href="company_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
						
						 <li>
                            <a href="company_approved.php"><i class="icon-file icon-large"></i>&nbsp;Services
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
							
                        <li>
                            <a href="company_requests.php"><i class="icon-file icon-large"></i>&nbsp;Client Choice
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                      
                        <li><a href="company_service.php"><i class="icon-group icon-large"></i>&nbsp;Service Requests
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                              <li class="active"><a href="company_profile.php"><i class="icon-group icon-large"></i>&nbsp;Company Profile
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                             <li><a href="company_reports.php"><i class="icon-book icon-large"></i>&nbsp;Progress Reports
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                    </ul>
                </div>

            </div>
            <div class="span9">

                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                           
                            <strong><i class="icon-user icon-large"></i>&nbsp;Company Profile</strong>
                        </div>
                       
                        <tbody>

                            <?php
                                $query = mysql_query("select * from company where cid = '$session_id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                 $cid = $row['cid'];
								 $name = $row['name'];
								 $email = $row['email'];
								 $username = $row['username'];
								 $password = $row['password'];
								
								 $postal = $row['postal'];
								 $image = $row['logo'];
								 $address = $row['address'];
								 $contact = $row['contact'];
								 
						
                                ?>
                                <td width="100" >
                            <img src="<?php echo $image; ?>" width="100" height="200" > 
                                 
                                    
                                 </td>
                                 <td> 
                                 <p/>
                                      <strong>Company Name:  <?php    echo $name; ?> <p/>
                                 
                                    Email Address:  <?php echo $email; ?> <p/>
                                  Physical Address:  <?php echo $address; ?> <p/>
                                   Contact:  <?php echo $contact; ?> <p/>
                                 Postal Code:  <?php echo $postal; ?> <p/>
                                 
                                 Username:  <?php echo $username; ?> <p/>
                               
                                 
                                 <p/>
                                    <a rel="tooltip"  title="Edit Profile" href="company_edit_profile.php" class="btn btn-success"><i class="icon-pencil icon-large"> &nbsp;Edit Profile</i></a>
                                  </td>
                                
                             <?php  }?>   
                                 
                            
                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>

<?php include('footer.php'); ?>
    
    
    </div>
</div>
</div>






</body>
</html>


