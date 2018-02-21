<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
                           
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Clients Table</strong>
                                </div>
                                
                                  <ul class="breadcrumb"> 
	<li>Clients<span class="divider">/</span></li>				
    <li><a href="client_assigned.php">Assigned</a><span class="divider">/</span></li>
    <li class="active">UnAssigned<span class="divider">/</span></li>
   
    </ul>
                                <thead>
                                    <tr>

                                        
                                        <th>Client Name</th>
                                         <th>Address</th>
                                        <th>Contact</th>
                                        <th>Contact Person</th>
                                        <th>Email Address</th>
                                         <th>Action</th>                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from tb_clients where status='UnAssigned'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $student_id = $row['client_id'];
                                        ?>


                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $student_id; ?>').tooltip('show')
                                            $('#e<?php echo $student_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $student_id; ?>').tooltip('show')
                                            $('#d<?php echo $student_id; ?>').tooltip('hide')
											
											 $('#e<?php echo $student_id; ?>').tooltip('show')
                                            $('#e<?php echo $student_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->


                                    <tr class="odd gradeX">
                                      
                                        <td><?php echo $row['client_name']; ?></td> 

                                        <td><?php echo $row['client_address']; ?></td> 
                                        <td><?php echo $row['client_contact']; ?></td> 
                                         <td><?php echo $row['contact_person']; ?></td> 
                                        <td><?php echo $row['emailaddress']; ?></td> 
                                      
                                      
                                        <td width="100" align="center">
                                        
                                         <a rel="tooltip"  title="Details " id="e<?php echo $student_id; ?>" href="#"><button class="btn btn-success" title="Details " data-dismiss="modal" aria-hidden="true"><i class="icon-list icon-large"></i></button></a>
                                        
                                       
                                                                                       
                                             <a rel="tooltip"  title="Delete " id="d<?php echo $student_id; ?>" href="#course_id<?php echo $student_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                             
                                        </td>
                                       
                                       
                                        <!-- user delete modal -->
                                    
                                    <div id="course_id<?php echo $student_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this record?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_client.php<?php echo '?id=' . $student_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->
                                    
                
                                   
                                    

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>





</body>
</html>


