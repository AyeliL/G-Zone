
<!-- modal -->

<div id="apply" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    </div>
    <div class="modal-body">

        <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><i class="icon-upload-alt icon-large"></i>&nbsp;Submit your Application</strong>
                    </div>


                    <form class="form-horizontal" action="upload_save.php" method="post" enctype="multipart/form-data" name="upload" >
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">File</label>
                            <div class="controls">

                                <input name="uploaded_file" type="file" class="input-xlarge" required/>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                                <input type="hidden" name="id" value="<?php //echo $session_id ?>"/>
                                <input type="hidden" name="id_class" value="<?php //echo $get_id; ?>">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Header:</label>
                            <div class="controls">
                                <input type="text" name="header"  class="input-xlarge" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Message:</label>
                            <div class="controls">
                                <textarea name="desc" cols="" rows="" class="input-xlarge" required></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button name="Upload" type="submit" value="Upload" class="btn btn-info" /><i class="icon-upload-alt"></i>&nbsp;Upload and Submit</button>
                            </div>
                        </div>
                    </form>

    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-sign icon-large"></i>&nbsp;Close</button>

    </div>
</div><!-- end modal -->