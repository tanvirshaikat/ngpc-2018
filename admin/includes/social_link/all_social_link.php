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
                  <div class="col-md-8 col-md-offset-2 col-sm-12">

                    <div class="row">
                      
                    

                    <div class="col-md-6 social-link-size">
                      <center><p><i class="fa fa-facebook" aria-hidden="true" style=" color: #3a589e;"></i> 
                        <br>
                       <b>



<?php 

$query = "SELECT * FROM social_link WHERE social_link_id = '1'";
$select_social_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_social_info);

$social_link = $row['social_link'];

echo $social_link; 



 ?>





                       </b> 
                       <br>
                       <br>
                       <a href="social_link_case.php?source=edit_social_link&s_id=1"><button class="btn btn-sm btn-success">Update</button><a> </p></center>
                    </div>
                     <div class="col-md-6 social-link-size">
                      <center><p><i class="fa fa-twitter" aria-hidden="true" style="color: #00aced;"></i> 
                        <br>
                                             <b>



<?php 

$query = "SELECT * FROM social_link WHERE social_link_id = '2'";
$select_social_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_social_info);

$social_link = $row['social_link'];

echo $social_link; 



 ?>





                       </b>
                       <br>
                       <br>
                       <a href="social_link_case.php?source=edit_social_link&s_id=2"><button class="btn btn-sm btn-success">Update</button><a> </p></center>
                    </div>
                     <div class="col-md-6 social-link-size">
                      <center><p><i class="fa fa-linkedin" aria-hidden="true" style="color: #225982;"></i> 
                        <br>
                                              <b>



<?php 

$query = "SELECT * FROM social_link WHERE social_link_id = '3'";
$select_social_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_social_info);

$social_link = $row['social_link'];

echo $social_link; 



 ?>





                       </b>
                       <br>
                       <br>
                       <a href="social_link_case.php?source=edit_social_link&s_id=3"><button class="btn btn-sm btn-success">Update</button><a> </p></center>
                    </div>
                     <div class="col-md-6 social-link-size">
                      <center><p><i class="fa fa-youtube" aria-hidden="true" style="color: #f00;"></i> 
                        <br>
                                              <b>



<?php 

$query = "SELECT * FROM social_link WHERE social_link_id = '4'";
$select_social_info = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($select_social_info);

$social_link = $row['social_link'];

echo $social_link; 



 ?>





                       </b>
                       <br>
                       <br>
                       <a href="social_link_case.php?source=edit_social_link&s_id=4"><button class="btn btn-sm btn-success">Update</button><a> </p></center>
                    </div>

                    </div>

                  </div>
               </div>
             
            </section>
            <!-- /.content -->