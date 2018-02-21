<?php
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
						
						 <li class="active">
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
                            
                              <li><a href="company_profile.php"><i class="icon-group icon-large"></i>&nbsp;Company Profile
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
				
				 <a href="company_add_service.php"  role="button"  class="btn btn-info"><i class="icon-download-alt icon-large"></i> Add New Service</a>
				 
                                                    
				 
				 <br/> <br/> 
                                    
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;Services Offered</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>Service Name</th>
                                <th>Service Details</th>
                              
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $query = mysql_query("select * from services where company_id = '$session_id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
								$aid = $row['service_id'];
                                $sname = $row['company_id'];
								
								  
								
                                ?>
                                   

                                <tr class="odd gradeX">

                                   <td><?php echo $row['service_name']; ?></td>
                                    <td><?php  echo $row['service_details']; ?></td> 
                                  
                                    <td width="200">
                                    
                                   
                                   
                                        <a href="delete_service.php<?php echo '?id=' . $aid; ?>"  class="btn btn-danger"><i class="icon-close icon-large"></i>&nbsp;Delete</a>
                                       
                                    </td>
                                   

                            </tr>
                        <?php } ?>
                        </tbody>
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


