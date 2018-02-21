<?php ob_start();  ?>

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

                    <!-- Be sure to leave the brand out there if you want it shown -->


                    <!-- Everything you want hidden at 940px or less, place within here -->



                   

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
                                   
                                    
                                   <br/>  <br/>  <br/>  
                   <div class="datepos">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                

                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>