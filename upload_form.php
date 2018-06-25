<html>
<head>
<title>Upload Form</title>
</head>
<body>
	<div id="content" class="span10">
<?php echo $error;?>


<?php echo form_open_multipart('upload/do_upload');?>
<center>
<div class="control-group">
            <label for="nama" class="col-sm-2 control-label">Nama</label>
            <div class="controls">
              <input type="text" class="form-control" name="nama" required>
            </div>
          </div>
          <div class="control-group">
            <label for="harga" class="col-sm-2 control-label">NIM</label>
            <div class="controls">
              <input type="text" class="form-control" name="nim" required>
            </div>
            </div>
                     
            <div class="control-group">
            <label for="nama" class="col-sm-2 control-label">Judul</label>
            <div class="controls">
              <input type="text" class="form-control" name="judul" required>
            </div>
            </div>
            <div class="control-group">
            <label for="file" class="col-sm-2 control-label">File Proposal</label>
            <div class="controls">
              <input type="file" name="userfile" required>
          </div>
<br /><br />

<input type="submit" value="Upload" class="btn btn-primary" />
<input type="reset" value="Reset" class="btn btn-primary" />

</form>
</body>
</html>
</div><!--/span-->