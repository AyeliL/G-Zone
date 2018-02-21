<?php
include('header.php');
include ('session.php');
$user_query = mysql_query("select * from student where sid='$session_id'") or die(mysql_error());
$user_row = mysql_fetch_array($user_query);
?>
 <?php include('apply_modal.php'); ?>
<body>

    <?php include('navhead_student.php'); ?>

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
                        <li>
                            <a href="student_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li   class="active">
                            <a href="student_class.php"><i class="icon-group icon-large"></i>&nbsp;Vacancies
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                             <li>
                            <a href="student_class.php"><i class="icon-envelope icon-large"></i>&nbsp;Notifications
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                            
                             <li>
                            <a href="student_class.php"><i class="icon-user icon-large"></i>&nbsp;Profile
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
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;My Vacancies</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>Company</th>
                                <th>Vacancy</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = mysql_query("select * from vacancies") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                 $v_id = $row['vacancy_id'];
                                ?>
                                
                                      <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $v_id; ?>').tooltip('show')
                                            $('#e<?php echo $v_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $v_id; ?>').tooltip('show')
                                            $('#d<?php echo $v_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    
                                <tr class="odd gradeX">


                                    <td><?php echo $row['c_name']; ?></td>
                                    <td><?php echo $row['v_name']; ?></td> 
                                    <td><?php echo $row['dept']; ?></td>   
 <td width="100">
                                            <a href="upload.php<?php echo '?vid=' . $v_id; ?>">Apply</a>
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


