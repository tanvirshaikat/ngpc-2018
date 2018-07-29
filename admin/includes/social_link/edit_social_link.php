            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-link" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>All Social Links</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-sm-12">

                    <div class="row">
                      
                    

                    <div class="col-md-12 social-link-size">



<?php 

  if (isset($_GET['s_id'])) {

      $the_social_id = $_GET['s_id'];
    }

    $query = "SELECT * FROM social_link WHERE social_link_id = $the_social_id "; //query for showing post.
    $select_social_info = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_social_info)) {

    $social_link_id = $row['social_link_id'];

    $social_link = $row['social_link'];

    $social_link_icon = $row['social_link_icon'];

    


}

  if (isset($_POST['update_social'])) {
    
    $social_link = mysqli_real_escape_string($connection, $_POST['social_link']);



    $query = "UPDATE social_link SET ";
    $query.= "social_link = '{$social_link}' ";

    $query.= "WHERE social_link_id = {$the_social_id} ";

    $update_social = mysqli_query($connection,$query);

    if (! $update_social) {
      die("QUERY FAILED" . mysqli_error($connection));
    } else {
      echo "<center><h4 style='color:green;font-weight:600;'>Your Info Has Been Updated!</h4></center>";
    }
    
  }
    

 ?>






                      <center><p><?php echo $social_link_icon; ?> 
                        <br>
                        <form class="col-md-12" action="" method="post">


                          <div class="form-group col-md-12">
                            <input type="text" name="social_link" class="form-control" value="<?php echo $social_link; ?>">
                          </div>

                          <div class="form-group col-md-4 col-md-offset-4">

                          <input style="background-color: green; color: #fff;" class="form-control btn btn-success" type="submit" name="update_social" value="Update">
                          </div>

                


                          
                        </form>
                       
                       
                       
                    </div>
                     
                     
                     
                    </div>

                  </div>
               </div>
             
            </section>
            <!-- /.content -->