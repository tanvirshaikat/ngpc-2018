            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-plus" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>Add Gallery Image</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">







<!-- Upload Banner Image -->






                  <div class="col-md-12">

<?php 
if (isset($_POST['add_banner'])) {


   $banner_image_title = mysqli_real_escape_string($connection,$_POST['banner_image_title']);
   
   $banner_image = $_FILES['banner_image']['name'];
   $banner_image = time().$banner_image;
   $banner_image_temp = $_FILES['banner_image']['tmp_name'];

   move_uploaded_file($banner_image_temp, "../admin_images/banner/$banner_image");

   $query = "INSERT INTO banner(banner_image_title, banner_image) ";

   $query .="VALUES('{$banner_image_title}', '{$banner_image}') ";

   $create_banner_query = mysqli_query($connection, $query);

   if (!$create_banner_query) {
      die("Query FAILED" . mysqli_error($connection));
   } else {
      echo "<script> window.location='banner_case.php'; </script>";
   }
   
   
}

 ?>



                     <form class="col-md-12 col-sm-12" method="post" action="" enctype="multipart/form-data">
                              <div class="form-group col-md-6">
                                 <label>Gallery Year</label>

                                 <select class="form-control" name="banner_image_title" required>
                                   <option value="2017">2017</option>
                                   <option value="2018">2018</option>
                                 </select>
                              </div>                       

                              <div class="form-group col-md-6">
                                 <label>Picture upload</label>
                                 <input type="file" class="form-control" name="banner_image" required>
                                 
                              </div>
                            
                              <br>
                              <div class="form-group col-md-12 text-center">
                                 <input type="submit" name="add_banner" value="Submit" class="btn btn-success">
                                 <br>
                                 <br>
                              </div>
                           </form>
                  </div>





<!-- Upload Banner Image End -->







<!-- All Banner Table -->

                  <div class="col-md-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                             <center> <a class="btn btn-add "> 
                              <i class="fa fa-picture-o"></i> All Gallery Images</a> </center> 
                           </div>
                        </div>
                        <div class="panel-body">

                           <div class="table-responsive">
                              <table id="example" class="display table table-bordered table-hover" cellspacing="0" width="100%">
                                 <thead>
                                    <tr class="info">


                                       <th>ID</th>
                                       <th>Year</th>
                                       <th>Gallery Images</th>
                                       <th>Upload Date</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>


<?php

$query = "SELECT * FROM banner";
$select_banner_info = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_banner_info)) {
   
   $banner_id = $row['banner_id'];
   $banner_image_title = $row['banner_image_title'];
   $banner_image = $row['banner_image'];
   $banner_date = $row['banner_date'];


   echo "<tr>";

   echo "<td> $banner_id </td>";

   echo "<td> $banner_image_title </td>";

   echo "<td> <img height='50' src='../admin_images/banner/$banner_image' > </td>";

   echo "<td> $banner_date </td>";

   echo "<td>
               <a style='text-decoration:none; color:green;font-size: 30px;' href='banner_case.php?source=edit_banner&b_id={$banner_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>
               <a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='banner_case.php?delete={$banner_id}'><i class='fa fa-trash' aria-hidden='true'></i></a>
         </td>";

   echo "</tr>";
}

 ?>


                                    
                                 </tbody>
                              </table>




<?php 

    if (isset($_GET['delete'])) {
        $the_banner_id = $_GET['delete'];
        $query = "SELECT * FROM banner WHERE banner_id = $the_banner_id";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $banner_id = $row['banner_id'];
          $banner_image = $row['banner_image'];
    
        $file = "../admin_images/banner/$banner_image";
            if (!unlink($file))
            {
            echo ("Error deleting $file");
            }
            else
            {
            echo ("Deleted $file");
            }

        $query = "DELETE FROM banner WHERE banner_id = $the_banner_id ";
        $delete_query = mysqli_query($connection, $query);
        
        echo "<script> window.location='banner_case.php'; </script>";
    }
}

 ?>






                           </div>
                        </div>
                     </div>
                  </div>

<!-- All Banner Table End -->






               </div>
               
            </section>
            <!-- /.content -->