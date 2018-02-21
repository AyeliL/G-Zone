<?php include('header.php');?>

    <style type="text/css">
 
      .form-signin {
        max-width: 600px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
	  
	  
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  		

 
<script>

function goBack()
  {
  window.history.back()
  }
  
</script>


     <?php include ("navhead1.php");?>
        
        <link rel="stylesheet" href="admin/validate/css/validationEngine.jquery.css" type="text/css"/>

		<script src="admin/validate/js/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="admin/validate/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
		<script src="admin/validate/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
		<script>
			jQuery(document).ready(function() {
				// binds form submission and fields to the validation engine
				jQuery("#formID").validationEngine({
					autoHidePrompt:true,
					prettySelect : true,
					useSuffix: "_chzn"

					//promptPosition : "bottomLeft"
				});
				$("#country").chosen({
					allow_single_deselect : true
				});
			});
		</script>
        
        <script>
		jQuery(document).ready(function(){
			jQuery("#formID").validationEngine();

			$("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		});
		</script>
        
        
  

 
  </head>
  
 
  
 
  


  <body>

    <div class="container">
    
    	<div class="row-fluid">
        
        	<div class="span6">
    
    			<div class="form-signin">
                

                
                <div class="btn-group">
    <a href="index.php"><button style="margin-left:0px; margin-bottom:0px;" class="btn"><i class="icon-hand-left"></i> Back</button></a>
  
 
				</div>
                
              
        <h4>Company Login</h4>
        	<hr>
        
                 <form class="form-horizontal" method="post">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
                    <input type="text" name="username" id="inputEmail" placeholder="Username" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" name="password" id="inputPassword" placeholder="Password" required>
                </div>
            </div>


            <div class="control-group">
                <div class="controls">
                    <button type="submit" name="login_company" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign in</button>
                </div>


            </div>

            <?php
            if (isset($_POST['login_company'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                $query = mysql_query("select * from company where username='$username' and password='$password'") or die(mysql_error());
                $count = mysql_num_rows($query);
                $row = mysql_fetch_array($query);


                if ($count > 0) {
					
					   $status = $row['status'];
					   
					   if ($status=='Active'){
						   session_start();
                    session_regenerate_id();
                    $_SESSION['id'] = $row['cid'];
                    header('location:company_home.php');
                    session_write_close();
                    exit(); 
						   
					   }else{
						 ?>
						 
						 
               <div class="pull-right">   
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert alert-danger"><i ></i>&nbsp;Your Account awaits Admin Verification</div>
                    </div>
<?php						 
						   
					   }
                   
                } else {
                    session_write_close();
                    ?>
                   <div class="pull-right">   
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert alert-danger"><i ></i>&nbsp;Access Denied. 
                        Invalid Login Details</div>
                    </div>
                    
                    
                    
                 
                    <?php
					//header('location:index.php');
                    //exit();
                }
            }
            ?>
        </form>
                
             
      
            
          
            
   			  </div><!--form sign -->
                
           	</div><!--span 6 -->
          
        
            
            
            <div class="span6">
    
    			<div class="form-signin">
                <br/><br/>
                
                <h4>Stuff you should know.</h4>
                
                <hr>
                
                 <table width="503">
            
            	
                
                <tr>
                All accounts are fake
                </tr>
                 <tr>
                We have bad ass employees that can annoy the hell in you
                </tr>
                 <tr>
              We dont give a Sh** about custommers
                </tr>
                 <tr>
                I dont even know why you chose us!!!
                </tr>
                
                 <tr>

                	
                   But guess what, we still the best......
            		
        		</tr>

             
                	                    
            		  <td></td>
		
        		</tr>
                
                
                </table>
                 
                                
                </form>
      			</div><!--form sign -->
                
           	</div><!--span 6 -->        
        
        </div><!--row fluid -->

    </div> <!-- /container -->
    
    
   

  </body>
 
</html>

 <?php include ("footer.php");?>
