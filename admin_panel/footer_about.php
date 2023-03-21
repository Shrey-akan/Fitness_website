<?php include('header.php');?>
<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Add Footer About Data</h4>
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">INSERT</button>
            </div>
          </div>
        </div>
      </div>
   <!-- Table Secation  -->    
               <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Silder Table</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Decripation</th>
                            <th>FaceBook Link</th>
                            <th>Twitter Link</th>
                            <th>Instagram Link</th>
                            <th>Logo Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sel = "SELECT * FROM  footer_about";
                        $res = mysqli_query($con, $sel);
                        $i = 1;
                        while ($r = mysqli_fetch_array($res)) {
                            echo "
                                  <tr>
                                    <td>$i</td>
                                    <td>$r[1]</td>
                                    <td>$r[2]</td>
                                    <td>$r[3]</td>
                                    <td>$r[4]</td>";

                                     if (!empty($r[5])) {
                                                    ?>
                                                        <td>
                                                            <img src='uploads/logo/<?php echo $r[5]; ?>' style='height:80px'>
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
									                 <a class='dropdown-item' href='update_footer_about.php?update_footer_about=$r[0]'>Edit</a>
									                 <a class='dropdown-item' href='delete.php?footer_about=$r[0]'>Delete</a>
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
            <label>Decripation</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="Decripation" name="details">
            </div>
          </div>
          <div class="form-group">
            <label>FaceBook Link</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="FaceBook Link" name="f_link">
            </div>
          </div>
          <div class="form-group">
            <label>Twitter Link</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="Twitter Link" name="t_link">
            </div>
          </div>
          <div class="form-group">
            <label>Instagram Link</label>
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" placeholder="Instagram Link" name="i_link">
            </div>
          </div>
          <div class="form-group">
            <label>Upload Silder Image</label>
             <input type="file" class="form-control" name="image">
           </div>
          <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="footer_about" value="footer_about">Submit</button>
        </form>
      </div>
    </div>
  </div>