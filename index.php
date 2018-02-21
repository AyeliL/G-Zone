<?php

ob_start();
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

<title>Welcome</title>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
           
            <div class="span12">
                <section class="main"></section>
                
                <div class="slider-wrapper theme-default">
                <?php include('slider.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">

                <div class="row-fluid">
                   
                       
                        <div class="hero-unit-2">
						 <div class="alert alert-info"><i class=""></i><strong>Companies - Getting Started With G-Zone</strong></div>
                          <h4>Welcome!!!!!</h4><p/>
                          In support to the thrust of the government to improve the health status of 
						  neighboring barangays, the Faculty and Staff of CHMSC ECS Fortune Towne, Bacolod City,
						  launched its Medical Mission in Patag, Silay City. It was conducted last March 2010, to address the health needs of the people. 
						  A medical consultation is given to the residents of SitioPatag to attend to their health related problems that may need medical treatment.
						  Medical tablets for headache, flu, fever, antibiotics and others were availed 
						  by <a href="new_comp.php"><button class="btn btn-medium btn-info" name="order" type="submit"><i class="icon-check"></i> Create Account</button></a>
   
                        </div>

                   
                  
                </div>
            </div>
        </div>



</div>


</div>
</div>

 <?php include('footer.php'); ?>

</body>
</html>


