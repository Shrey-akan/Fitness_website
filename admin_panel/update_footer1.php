<?php include('header.php');?>
<?php 
if ($_GET['update_footer1']) {
  $sno = $_GET['update_footer1'];
  $sel = "SELECT * FROM footer1 WHERE sno='$sno'";
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
                    <h4>Footer Table</h4>
                  </div>
                  <div class="card-body">
                  <form method="POST" action="update.php" enctype="multipart/form-data">
                  <input type="hidden" name="sno" value="<?php echo $r[0]; ?>" class="form-control">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" value="<?php echo $r[1]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Contact</label>
                      <input type="text" class="form-control" name="contact" value="<?php echo $r[2]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" name="address" value="<?php echo $r[3]; ?>">
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit" name="update_footer1" value="update_footer1">Submit</button>
                <a class="btn btn-danger" href="admin.php" >Cancle</a> 
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