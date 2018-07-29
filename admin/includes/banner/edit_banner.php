            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Gallery Image</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">







<!-- Upload Banner Image -->






                  <div class="col-md-12">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                             <center> <a class="btn btn-add " href="banner_case.php"> 
                              <i class="fa fa-picture-o"></i> All Images</a> </center> 
                           </div>
                        </div>
                        <div class="panel-body">





<?php 

  if (isset($_GET['b_id'])) {

      $the_banner_id = $_GET['b_id'];
    }

    $query = "SELECT * FROM banner WHERE banner_id= $the_banner_id "; //query for showing post.
    $select_banner_info = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_banner_info)) {

    $banner_id = $row['banner_id'];

    $banner_image_title = $row['banner_image_title'];

    $banner_image = $row['banner_image'];


}

  if (isset($_POST['update_banner'])) {
    
    $banner_image_title = mysqli_real_escape_string($connection, $_POST['banner_image_title']);
    
    $banner_image = $_FILES['banner_image']['name'];
    $banner_image_temp = $_FILES['banner_image']['tmp_name'];
    

    move_uploaded_file($banner_image_temp, "../admin_images/banner/$banner_image");

    if (empty($banner_image)) {
      
      $query = "SELECT * FROM banner WHERE banner_id = $the_banner_id ";
      $select_image = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_array($select_image)) {
        
        $banner_image = $row['banner_image'];
      }
    }

    $query = "UPDATE banner SET ";
    $query.= "banner_image_title = '{$banner_image_title}', ";
    $query.= "banner_image = '{$banner_image}' ";

    $query.= "WHERE banner_id = {$the_banner_id} ";

    $update_banner = mysqli_query($connection,$query);

    if (! $update_banner) {
      die("QUERY FAILED" . mysqli_error($connection));
    } else {
      echo "<center><h4 style='color:green;font-weight:600;'>Your Image Has Been Updated!</h4></center>";
    }
    
  }
    

 ?>

                          



                          <form class="col-md-12 col-sm-12" method="post" action="" enctype="multipart/form-data">

                              <div class="col-md-12">
                                  <center><img src="../admin_images/banner/<?php echo $banner_image; ?>" width="50%"></center>
                                  <hr>
                              </div>


                             <div class="form-group col-md-6">
                              <label>Gallery Year</label>

                                 <select class="form-control" name="banner_image_title" required>
                                  <option value="<?php echo $banner_image_title; ?>"><?php echo $banner_image_title; ?></option>
                                   <option value="2017">2017</option>
                                   <option value="2018">2018</option>
                                 </select>
                              </div>                      

                              <div class="form-group col-md-6">
                                 <label>Picture upload</label>
                                 <input type="file" class="form-control" name="banner_image">
                                 
                              </div>
                            
                              <br>
                              <div class="form-group col-md-12 text-center">
                                 <input type="submit" name="update_banner" value="Submit" class="btn btn-success">
                                 <br>
                                 <br>
                              </div>
                           </form>
                         </div>
                        </div>
                  </div>





<!-- Upload Banner Image End -->





               </div>
               
            </section>
            <!-- /.content -->