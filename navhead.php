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
                                <a href="index.php"><img src="admin/images/head.png" width="200" height="100"></a>
                            </div>
                            <div class="span6">
                                <div class="pull-right">
                                    <!--- login button -->							
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                               <li><a href="company_login.php"><i class="icon-user-md icon-large"></i>&nbsp;Company</a></li>
											   <li><a href="admin/index.php"><i class="icon-user-md icon-large"></i>&nbsp;Administrator</a></li>
                                          
                                        </ul>
                                    </div>
                                    
                                  
                   <div class="datepos">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                

                                    <!-- end login -->
                                  
                                    <?php include('company_modal.php'); ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>