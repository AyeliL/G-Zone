<?php
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from company where cid='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>

<?php
 $get_id=$_GET['id'];
$vac=mysql_query("select * from vacancies where vacancy_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($vac);
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
                        <li class="active">
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

                    </ul>
                </div>

            </div>
            <div class="span9">





                <a href="company_vacancies.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <br>
                <br>

                
                <div class="hero-unit-2">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong><i class="icon-user icon-large"></i>&nbsp;Add Vacancy</strong>
                </div>
                
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <input type="text" name = "name" value="<?php echo $row['v_name']; ?>"/>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Department</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="dept" required>
                                            <option><?php echo $row['dept']; ?></option>
                                            <?php
                                            $query = mysql_query("select * from department");
                                            while ($row1 = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row1['department']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                            
                        </div>

                     <div class="control-group">
                            <label class="control-label" for="inputEmail">Positions</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <input type="text" name = "pos" value="<?php echo $row['positions']; ?>"/>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Notes</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <textarea rows="8" name="notes" value="<?php echo $row['notes']; ?>"></textarea>
                        </div>


                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="save_class" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Vacancy</button>
                            </div>
                            <?php
                            if (isset($_POST['save_class'])) {
								
								 $query = mysql_query("select * from company where  cid='$session_id'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $cname = $row['Name'];
                               
							}
                               
                                $vname = $_POST['name'];
                                $dept = $_POST['dept'];
                                $postions = $_POST['pos'];
								$notes = $_POST['notes'];

                                mysql_query("update vacancies set v_name='$vname',dept='$dept',positions=$postions,notes='$notes' where vacancy_id='$get_id' ") or die(mysql_error());
                                header('location:company_vacancies.php');
                            }
                            ?>
                        </div>
                    </form>
                </div>




                <!-- end slider -->
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


