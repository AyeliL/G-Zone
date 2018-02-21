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
						
						 <li>
                            <a href="company_requests.php"><i class="icon-file icon-large"></i>&nbsp;Services
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
							
                        <li>
                            <a href="company_requests.php"><i class="icon-file icon-large"></i>&nbsp;Client Choices 
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                       
                        <li  class="active"><a href="company_service.php"><i class="icon-group icon-large"></i>&nbsp;Service Requests
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
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                        
                            <strong><i class="icon-user icon-large"></i>&nbsp;Company Service Requests from Clients</strong>
                        </div>
                        <thead>
                            <tr>
                                <th>Client Name</th>
                                <th>Client Details</th>
                                <th>Service Details</th>
								 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysql_query("select * from client_requests where company_id = '$session_id' ") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $company_id = $row['company_id'];
								$client_id = $row['client_id'];
                                $company_id = $row['company_id'];
							    $request = $row['request_details'];
							   
                                ?>
                                        
										
										<?php 
										$user_query = mysql_query("select * from tb_clients where client_id='$client_id'") or die(mysql_error());
                                        $user_row = mysql_fetch_array($user_query);
                                        
										 $client_name  =  $user_row['client_name'];
										 $client_details  =  $user_row['client_address'];
										
										
										?>
										
										<?php 
										$co_query = mysql_query("select * from company where cid='$company_id'") or die(mysql_error());
                                        $co_row = mysql_fetch_array($co_query);
                                        
										 $coname  =  $co_row['name'];
										
										
										
										?>


                                <tr class="odd gradeX">
                                  
                                  <td><?php echo $client_name; ?></td>
								   <td><?php echo $client_details; ?></td>
								   <td><?php echo $request; ?></td>
								 <td width="200">
                                    
                                   
                                       <a href=" #course_id<?php echo $company_id; ?>" role="button"  data-toggle="modal" class="btn btn-info"><i class="icon-tick icon-large">
									 </i>&nbsp;Revert</a>
                                     
                                        
                                       
                                    </td>
									
									 <!-- program delete modal -->
                                        <div id="course_id<?php echo $company_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
										 <div class="alert alert-danger"> <strong>Revert to Client</strong>&nbsp; </div>
                                        </div>
                                        <div class="modal-body">
										
										
										 <form class="form-horizontal" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Subject:</label>
                                            <div class="controls">
                                                <input type="text" name="subject" id="inputEmail" placeholder="Subject" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Message:</label>
                                            <div class="controls">
                                                <textarea name="message" placeholder="Enter brief message"></textarea>
                                            </div>
                                        </div>
                                      
                                        
                                        <div class="control-group">
                                            <div class="controls">

                                                <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['save'])) {

                                        $subject = $_POST['subject'];
                                        $message = $_POST['message'];
                                        
										$reporter = "Message sent to client --- ".$message;
                                       
                                        
                   mysql_query("insert into notifications (cid,cname,subject,message,client_id) values ('$company_id','$coname','$subject','$message','$client_id')")or die(mysql_error());
								 
				    mysql_query("insert into reports (date,details,company_id) values ('$new','$reporter','$company_id')")or die(mysql_error());
                                      ?>
                                      
                                      <script>
                                      window.location("company_service.php");
                                      </script>
                                      
                                      <?php
                                    }
                                    ?>
										
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Cancel</button>
                                          
                                        </div>
                                    </div>
                                    <!-- end delete modal -->


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


