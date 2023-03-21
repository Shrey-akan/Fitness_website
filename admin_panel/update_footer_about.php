<?php include('header.php');?>
<?php 
if ($_GET['update_footer_about']) {
  $sno = $_GET['update_footer_about'];
  $sel = "SELECT * FROM footer_about WHERE sno='$sno'";
  $res = mysqli_query($con,$sel);
  $r = mysqli_fetch_array($res);
}
?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Footer About Table</h4>
                  </div>
                  <div class="card-body">
                  <form method="POST" action="update.php" enctype="multipart/form-data">
                  <input type="hidden" name="sno" value="<?php echo $r[0]; ?>" class="form-control">
                    <div class="form-group">
                      <label>Decripation</label>
                      <input type="text" class="form-control" name="details" value="<?php echo $r[1]; ?>">
                    </div>
                    <div class="form-group">
                      <label>FaceBook Link</label>
                      <input type="text" class="form-control" name="f_link" value="<?php echo $r[2]; ?>">
                    </div>
                      <div class="form-group">
                      <label>Twitter Link</label>
                      <input type="text" class="form-control" name="t_link" value="<?php echo $r[3]; ?>">
                    </div>
                     <div class="form-group">
                      <label>Instgram Link</label>
                      <input type="text" class="form-control" name="i_link" value="<?php echo $r[4]; ?>">
                    </div>
                    <div class="form-group">
            		  <label>Old Image</label><br>
            		  <img src="uploads/logo/<?php echo $r[5]; ?>" height="100">
          			</div>
                	<div class="form-group">
                      <label>Upload Image</label>
                      <input type="file" name="new_image" class="form-control"/>
                      <input type="hidden" name="old_image" value="<?php echo $r[5]; ?>" >
                   </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit" name="update_footer_about" value="update_footer_about">Submit</button>
                <a class="btn btn-danger" href="footer_about.php" >Cancle</a> 
                  </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </section>
            </div>
<?php include('footer.php');?>