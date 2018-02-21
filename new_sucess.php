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
            <div class="span12">

                <div class="row-fluid">
                   
                       
                        <div class="hero-unit-2">
						 <div class="alert alert-danger"><i class=""></i><strong>Confirmation</strong></div>
                          <h4>Success!!!</h4><p/>
                         
						Company account information was successfully submitted and awaits Admin Verification. <p/>Once done you can go ahead and login by clicking: <p/> <a href="company_login.php"><button class="btn btn-medium btn-info" name="order" type="submit"><i class="icon-check"></i> Log In</button></a>
   
                        </div>

                   
                  
                </div>
            </div>
        </div>
   

  </body>
  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>
 
</html>

 <?php include ("footer.php");?>
