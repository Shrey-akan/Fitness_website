 <?php include('header.php');?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Add Class Data</h4>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Modal With Form</button>
            </div>
          </div>
        </div>
      </div>
   <!-- Table Secation  -->    
               <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Class Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Class Name</th>
                            <th>Class Time</th>
                            <th>Week Name</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sel = "SELECT * FROM  class";
                        $res = mysqli_query($con, $sel);
                        $i = 1;
                        while ($r = mysqli_fetch_array($res)) {
                            echo "
                                  <tr>
                                    <td>$i</td>
                                    <td>$r[1]</td>
                                    <td>$r[2]</td>
                                    <td>$r[3]</td>";
                                     if (!empty($r[4])) {
                                                    ?>
                                                        <td>
                                                            <img src='uploads/class/<?php echo $r[4]; ?>' style='height:80px'>
                                                        </td>
                                                    <?php
                                                }
                                                else
                                                {
                                                    echo "<td></td>";
                                                }
                                   echo"
                                    <td>
                                    <button type='button' class='btn btn-dark dropdown-toggle' data-toggle='dropdown'aria-haspopup='true' aria-expanded='false'>Action
									                 </button>
                                    <div class='dropdown-menu dropright'>
									                 <a class='dropdown-item' href='update_class.php?update_class=$r[0]'>Edit</a>
									                 <a class='dropdown-item' href='delete.php?class=$r[0]'>Delete</a>
									                 </div>
                                    </td>
                                  </tr>
             					        ";
                                            $i++;
                                        }

                                        ?>
  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
  </section>
</div>
<!-- Footer Section -->
</div> <?php include('footer.php');?>
<!-- Modal with form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Fill The Field</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" method="POST" action="insert.php" enctype="multipart/form-data">
          <div class="form-group">
            <label>Class Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="Class Name" name="class_name">
            </div>
          </div>
          <div class="form-group">
            <label>Class Time</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="Class Time" name="class_time">
            </div>
          </div>
          <div class="form-group">
            <label>Week Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="Week Name" name="week_name">
            </div>
          </div>
          <div class="form-group">
            <label>Upload Silder Image</label>
             <input type="file" class="form-control" name="image">
           </div>
          <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="class" value="class">Submit</button>
        </form>
      </div>
    </div>
  </div>