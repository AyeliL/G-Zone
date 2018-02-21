<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                  

                </div>
            </div>
        </div>
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span6">
                             <img src="admin/images/head.png" width="200" height="100">

                            </div>
                            <div class="span6">
                                <div class="pull-right">
                                    <!--- login button -->							
                                  <?php 
                                    $student_query=mysql_query("select * from company where cid='$session_id'")or die(mysql_error());
                                    $teacher_row=  mysql_fetch_array($student_query);
                                    ?>
                                    
                                     <img  src="<?php echo $teacher_row['logo']; ?>"  class="img img-rounded" id="picture">
                                        &nbsp;
                                    <div class="btn-group">
                                       
                                        <button class="btn btn-success"><i class="icon-user icon-large"></i>&nbsp; <?php echo $teacher_row['name'] . " - " . $teacher_row['address']; ?></button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#logout" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                                        </ul>

                                    </div>

                                    <?php include('logout_modal.php') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>