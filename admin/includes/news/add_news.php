<section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-plus"></i>
               </div>
               <div class="header-title">
                  <h1>Add News</h1>
                  <!-- <small></small> -->
                 <!--  <br> -->
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="news_case.php"> 
                              <i class="fa fa-newspaper-o" aria-hidden="true"></i> All News</a>  
                           </div>
                        </div>
                        <div class="panel-body">




<?php 

if (isset($_POST['add_news'])) {
   
   $news_title = mysqli_real_escape_string($connection,$_POST['news_title']);
   $news_content = mysqli_real_escape_string($connection, $_POST['news_content']);
   $news_author = mysqli_real_escape_string($connection, $_POST['news_author']);
   $news_date = mysqli_real_escape_string($connection, $_POST['news_date']);

   $news_image = $_FILES['news_image']['name'];
   $news_image = time().$news_image;
   $news_image_temp = $_FILES['news_image']['tmp_name'];

   move_uploaded_file($news_image_temp, "../admin_images/news/$news_image");

   $query = "INSERT INTO news(news_title, news_content, news_author, news_image, news_date) ";

   $query .="VALUES('{$news_title}', '{$news_content}', '{$news_author}', '{$news_image}', '{$news_date}') ";

   $create_news_query = mysqli_query($connection, $query);

   if (!$create_news_query) {
      die("Query FAILED" . mysqli_error($connection));
   } else {
      echo "<script> window.location='news_case.php'; </script>";
   }

}


 ?>







                           <form class="col-md-12 col-sm-12" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group col-md-12">
                                 <label>News Title</label>
                                 <input type="text" class="form-control" name="news_title" required>
                              </div>
                              
                                 
                                 
                              
                             <div class="form-group col-md-12">
                                 <label>News Author</label>
                                 <input type="text" class="form-control" name="news_author" required>
                              </div>
                              
                              <div class="form-group col-md-12">
                                 <label>News Content</label>
                                 <textarea id="editor1" class="form-control" rows="3" col="50" name="news_content" required></textarea>
                              </div>

                              <div class="form-group col-md-6">
                                 <label>News Date (1080*512 px)</label>
                                 <input type="text" name="news_date" class="form-control">
                              </div>
                              

                              <div class="form-group col-md-6">
                                 <label>Picture</label>
                                 <input type="file" name="news_image" class="form-control">
                                
                              </div>

                                <br>
                             
                               <div class="form-group col-md-12">
                                 <center><input type="submit" name="add_news" class="btn btn-success" value="Submit"></center>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>