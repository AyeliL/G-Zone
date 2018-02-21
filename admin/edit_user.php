<?php
include('header.php');
$get_id = $_GET['id'];

ob_start();
?>
<?php include('session.php'); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar.php'); ?>

            <div class="container">

                <div class="row-fluid">
                    <div class="span2">
                        <!-- left nav -->
                        <ul class="nav nav-tabs nav-stacked">

                            <li class="active">
                                <a href="add_user.php"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add User</a>
                                <a href="user.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            </li>


                        </ul>
                        <!-- right nav -->
                    </div>
                    <div class="span10">

					<div class="hero-unit-3">
                        <ul class="thumbnails">
                            <li class="span7">
                                <div class="thumbnail">
                                    <div class="alert alert-info"><i class="icon-pencil-alt icon-large"></i>&nbsp;Edit User Account</div>
                                    
                                      <?php
                            $query = mysql_query("select * from user where user_id='$get_id'") or die(mysql_error());
                            $row = mysql_fetch_array($query);
                            ?>

                                    <form class="form-horizontal" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="inputEmail">Username:</label>
                                            <div class="controls">
                                                <input type="text" name="un" id="inputEmail" value="<?php echo $row['username']; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Password:</label>
                                            <div class="controls">
                                                <input type="text" name="p" id="inputPassword" value="<?php echo $row['password']; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="inputPassword">Firstname:</label>
                                            <div class="controls">
                                                <input type="text" name="fn" id="inputPassword" value="<?php echo $row['firstname']; ?>">
                                            </div>
                                        </div>
                                        
                                          <div class="control-group">
                                            <label class="control-label" for="inputPassword">Lastname:</label>
                                            <div class="controls">
                                                <input type="text" name="ln" id="inputPassword" value="<?php echo $row['lastname']; ?>">
                                            </div>
                                        </div>
                                       
                                        <div class="control-group">
                                            <div class="controls">

                                                <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save User</button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['save'])) {

                                        $un = $_POST['un'];
                                        $p = $_POST['p'];
                                             $fn = $_POST['fn'];
										      $ln = $_POST['ln'];
                                       
                                        
                       mysql_query("update user set firstname='$fn',lastname='$ln', username='$un', password='$p'  where user_id='$get_id'") or die(mysql_query());
                             header('location:user.php');
                                    }
                                    ?>

                                </div>
                            </li>

                        </ul>
						</div>



                    </div>
                </div>

                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>




</body>
</html>


