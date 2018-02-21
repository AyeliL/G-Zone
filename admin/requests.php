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
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Requests Table</strong>
                                </div>
                                <thead>
                                    <tr>


                                        <th>Request ID</th>
                                        <th>Request Date</th>  
                                        <th>Client Details</th>
                                        <th>Company Details</th>
                                        <th>Request Details</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from client_requests") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $teacher_id = $row['request_id'];
                                        ?>
                                        <tr class="odd gradeX">

                                            <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $teacher_id; ?>').tooltip('show')
                                            $('#e<?php echo $teacher_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $teacher_id; ?>').tooltip('show')
                                            $('#d<?php echo $teacher_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                      <td><?php echo $row['request_id']; ?></td> 
                                      <td><?php echo $row['client_id']; ?></td> 
                                      <td><?php echo $row['company_id'] . " " . $row['lname']; ?></td> 
                                      <td><?php echo $row['request_details']; ?></td> 

                                   
                                    <!-- user delete modal -->
                                    <div id="course_id<?php echo $teacher_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this record?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_lecturer.php<?php echo '?id=' . $teacher_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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


