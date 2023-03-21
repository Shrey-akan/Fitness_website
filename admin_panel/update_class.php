<?php include('header.php');?>
<?php 
if ($_GET['update_class']) {
  $sno = $_GET['update_class'];
  $sel = "SELECT * FROM class WHERE sno='$sno'";
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
                    <h4>Class Table</h4>
                  </div>
                  <div class="card-body">
                  <form method="POST" action="update.php" enctype="multipart/form-data">
                  <input type="hidden" name="sno" value="<?php echo $r[0]; ?>" class="form-control">
                    <div class="form-group">
                      <label>Class Name</label>
                      <input type="text" class="form-control" name="class_name" value="<?php echo $r[1]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Class Time</label>
                      <input type="text" class="form-control" name="class_time" value="<?php echo $r[2]; ?>">
                    </div>
                    <div class="form-group">
                      <label>Week Name</label>
                      <input type="text" class="form-control" name="week_name" value="<?php echo $r[3]; ?>">
                    </div>
                    <div class="form-group">
            		  <label>Old Image</label><br>
            		  <img src="uploads/class/<?php echo $r[4]; ?>" height="100">
          			</div>
                	<div class="form-group">
                      <label>Upload Image</label>
                      <input type="file" name="new_image" class="form-control"/>
                      <input type="hidden" name="old_image" value="<?php echo $r[4]; ?>" >
                      <!-- <img src="uploads/admin/<?php echo $r[3]; ?>" height="100"> -->
                   </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit" name="update_class" value="update_class">Submit</button>
                <a class="btn btn-danger" href="class.php" >Cancle</a> 
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