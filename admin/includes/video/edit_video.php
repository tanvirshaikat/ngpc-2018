            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>Edit Video</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">







<!-- Upload Video ID -->






                  <div class="col-md-12">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                             <center> <a class="btn btn-add " href="video_case.php"> 
                              <i class="fa fa-video-camera"></i> All Video</a> </center> 
                           </div>
                        </div>
                        <div class="panel-body">





<?php 

  if (isset($_GET['v_id'])) {

      $the_video_id = $_GET['v_id'];
    }

    $query = "SELECT * FROM video WHERE video_id= $the_video_id "; //query for showing post.
    $select_video_info = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_video_info)) {

    $video_id = $row['video_id'];

    $video_title = $row['video_title'];

    $youtube_video_id = $row['youtube_video_id'];


}

  if (isset($_POST['update_video'])) {
    
    $video_title = mysqli_real_escape_string($connection, $_POST['video_title']);
    $youtube_video_id = mysqli_real_escape_string($connection, $_POST['youtube_video_id']);
    

    $query = "UPDATE video SET ";
    $query.= "video_title = '{$video_title}', ";
    $query.= "youtube_video_id = '{$youtube_video_id}' ";

    $query.= "WHERE video_id = {$the_video_id} ";

    $update_video = mysqli_query($connection,$query);

    if (! $update_video) {
      die("QUERY FAILED" . mysqli_error($connection));
    } else {
      echo "<center><h4 style='color:green;font-weight:600;'>Your Video Has Been Updated!</h4></center>";
    }
    
  }
    

 ?>

                          



                          <form class="col-md-12 col-sm-12" method="post" action="" enctype="multipart/form-data">

                              <div class="col-md-12">
                                  <center><iframe width="100%" height="300" src="https://www.youtube.com/embed/<?php echo $youtube_video_id; ?>?rel=0" frameborder="0" allowfullscreen></iframe></center>
                                  <hr>
                              </div>

                              <div class="form-group col-md-6">
                                 <label>Video Title</label>
                                 <input type="text" class="form-control" name="video_title" value="<?php echo $video_title; ?>">
                              </div>                       

                              <div class="form-group col-md-6">
                                 <label>Youtube Video ID</label>
                                 <input type="text" class="form-control" name="youtube_video_id" value="<?php echo $youtube_video_id; ?>">
                                 
                              </div>
                            
                              <br>
                              <div class="form-group col-md-12 text-center">
                                 <input type="submit" name="update_video" value="Update" class="btn btn-success">
                                 <br>
                                 <br>
                              </div>
                           </form>
                         </div>
                        </div>
                  </div>





<!-- Upload Video ID End -->





               </div>
               
            </section>
            <!-- /.content -->