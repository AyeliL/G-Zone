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
                        <li  >
                            <a href="company_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li>
                            <a href="company_vacancies.php"><i class="icon-file icon-large"></i>&nbsp;Vacancies
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="company_applicants.php"><i class="icon-group icon-large"></i>&nbsp;Applicants
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                        <li><a href="company_accepted.php"><i class="icon-group icon-large"></i>&nbsp;Accepted
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                              <li><a href="company_profile.php"><i class="icon-group icon-large"></i>&nbsp;Profile
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                            <li  class="active"><a href="company_reports.php"><i class="icon-book icon-large"></i>&nbsp;Progress Reports
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>

                    </ul>
                </div>

            </div>
            <div class="span9">



                <div class="hero-unit-3">
                           
                            <div class="controls">
                  <a href="company_reports.php">  <button type="submit" name="ade" class="btn btn-danger"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</button></a>
                    <p/>
                                </div>
                   
                        <div class="alert alert-info">
                           
                            <strong><i class="icon-user icon-large"></i>&nbsp;Reporting</strong>
                        </div>
                       
                      
                            <?php
                           
                            $query = mysql_query("select * from accepted where cid = '$session_id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
								$sid = $row['sid'];
                                $sname = $row['sname'];
								$position = $row['position'];
								 
								  
								
                                ?>
                                   
                            <form class="form-horizontal" method="post">
                       <div class="control-group">
                       <div align="center">
                 <label ><strong> Name:</strong>   <?php echo $sname; ?> <p/></label>
                   <label> <strong>Date: </strong>  <?php echo $new; ?><p/></label>
                    </div>
                 <br/>
                <div class="controls">
                   <!-- <input type="text" name="conte" id="inputEmail" placeholder="Username">-->
                    <textarea class="span9" rows="8" name="desc"></textarea>
                    
                </div>
            </div>
           


            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="ade" class="btn btn-success"><i class="icon-ok icon-large"></i>&nbsp;Submit</button>
                </div>


            </div>

         <?php
               if (isset($_POST['ade'])) {
                                
								$dec = $_POST['desc'];
								//$sid = $_POST['sid'];
								
								 $Today = date('y:m:d');
                                 $new = date('l, F d, Y', strtotime($Today));
                       
                               
                                mysql_query("insert into reports(sid,date,content) values('$sid','$new','$dec')") or die(mysql_error());
								
								}
								?>                  
        </form>
                             
                                   
                           
                        <?php } ?>
                      
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


