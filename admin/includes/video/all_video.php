            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-plus" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>Add Video</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">







<!-- Add Video ID Start -->






                  <div class="col-md-12">

<?php 
if (isset($_POST['add_video'])) {


   $video_title = mysqli_real_escape_string($connection,$_POST['video_title']);
   $youtube_video_id = mysqli_real_escape_string($connection,$_POST['youtube_video_id']);
   

   $query = "INSERT INTO video(video_title, youtube_video_id) ";

   $query .="VALUES('{$video_title}', '{$youtube_video_id}') ";

   $create_video_query = mysqli_query($connection, $query);

   if (!$create_video_query) {
      die("Query FAILED" . mysqli_error($connection));
   } else {
      echo "<script> window.location='video_case.php'; </script>";
   }
   
   
}

 ?>



                     <form class="col-md-12 col-sm-12" method="post" action="" enctype="multipart/form-data">
                              <div class="form-group col-md-6">
                                 <label>Video Title</label>
                                 <input type="text" class="form-control" name="video_title" required>
                              </div>                       

                              <div class="form-group col-md-6">
                                 <label>Youtube Video ID </label>
                                 <input type="text" class="form-control" name="youtube_video_id" placeholder="Enter Your Youtube Video ID (Like red portion of below example)" required>
                                 <h5><b>Example: </b> https://www.youtube.com/watch?v=<b style="color:red;">qn2x62G5GmM</b></h5>
                                 
                              </div>
                            
                              <br>
                              <div class="form-group col-md-12 text-center">
                                 <input type="submit" name="add_video" value="Submit" class="btn btn-success">
                                 <br>
                                 <br>
                              </div>
                           </form>
                  </div>





<!-- Add Video ID End -->







<!-- All Video Table -->

                  <div class="col-md-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                             <center> <a class="btn btn-add "> 
                              <i class="fa fa-video-camera"></i> All Video</a> </center> 
                           </div>
                        </div>
                        <div class="panel-body">

                           <div class="table-responsive">
                              <table id="example" class="display table table-bordered table-hover" cellspacing="0" width="100%">
                                 <thead>
                                    <tr class="info">


                                       <th>ID</th>
                                       <th>Video Title</th>
                                       <th>Video</th>
                                       <th>Upload Date</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>


<?php

$query = "SELECT * FROM video";
$select_video_info = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_video_info)) {
   
   $video_id = $row['video_id'];
   $video_title = $row['video_title'];
   $youtube_video_id = $row['youtube_video_id'];
   $video_date = $row['video_date'];


   echo "<tr>";

   echo "<td> $video_id </td>";

   echo "<td> $video_title </td>";

   echo "<td> <iframe width='100%' src='https://www.youtube.com/embed/$youtube_video_id?rel=0' frameborder='0' allowfullscreen></iframe> </td>";

   echo "<td> $video_date </td>";

   echo "<td>
               <a style='text-decoration:none; color:green;font-size: 30px;' href='video_case.php?source=edit_video&v_id={$video_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>
               <a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='video_case.php?delete={$video_id}'><i class='fa fa-trash' aria-hidden='true'></i></a>
         </td>";

   echo "</tr>";
}

 ?>


                                    
                                 </tbody>
                              </table>




<?php 

    if (isset($_GET['delete'])) {
        $the_video_id = $_GET['delete'];

        $query = "DELETE FROM video WHERE video_id = $the_video_id ";
        $delete_query = mysqli_query($connection, $query);
        
        echo "<script> window.location='video_case.php'; </script>";
    }


 ?>






                           </div>
                        </div>
                     </div>
                  </div>

<!-- All Video Table End -->






               </div>
               
            </section>
            <!-- /.content -->