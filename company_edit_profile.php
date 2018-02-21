<?php
ob_start();
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from company where cid='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
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
                        <li >
                            <a href="company_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li>
                            <a href="company_requests.php"><i class="icon-file icon-large"></i>&nbsp;Client Requests 
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="company_approved.php"><i class="icon-group icon-large"></i>&nbsp;Approved Clients 
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="company_service.php"><i class="icon-group icon-large"></i>&nbsp;Service Requests
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                              <li  class="active"><a href="company_profile.php"><i class="icon-group icon-large"></i>&nbsp;Company Profile
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
                     <a rel="tooltip"  href="company_profile.php" class="btn btn-danger"><i class="icon-arrow-left icon-large"> &nbsp;Back</i></a>
                    <p/>
                        <div class="alert alert-info">
                                                       <strong><i class="icon-user icon-large"></i>&nbsp;Edit Profile</strong>
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
								 
							}
                                ?>
                                <td width="100" >
                            <img  src="<?php echo $image; ?>"   width="100" height="200" > 
                                 
                                    
                                 </td>
                                 <td> 
                                 <p/>
								 <form action="" method="post">
                                 <strong>Company Name:  <input name="cname" type="text" id="req" value="<?php echo $name; ?>"> <p/>
                                 
                                            Email Address: <input name="email" type="text" id="req" value="<?php echo $email; ?>"> <p/>
                                       Physical Address:  <input name="address" type="text" id="req" value="<?php echo $address; ?>"><p/>
                                   Contact:  <input name="contact" type="text" id="req" value="<?php echo $contact; ?>"> <p/>
                                 Postal Code:  <input name="postal" type="text" id="req" value="<?php echo $postal; ?>"> <p/>
                                
                                 Username:  <input name="username" type="text" id="req" value="<?php echo $username; ?>"><p/>
                                
                                 <p/>
                                           <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save Changes</button>
                                  </td>
								  
								    <?php
                                    if (isset($_POST['save'])) {

                                        $name = $_POST['cname'];
                                        $email = $_POST['email'];
                                        $address = $_POST['address'];
										$username = $_POST['username'];
                                       
                                        
                                    mysql_query("update company set name='$name', email ='$email', username='$username', address='$address' where cid ='$session_id'")or die(mysql_error());
                                     
								         	 header("location:company_profile.php");
                                    }
                                    ?>
                                </form>
                                
                                 
                            
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


