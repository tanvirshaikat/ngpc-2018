            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>Edit News</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">














                  <div class="col-md-12">
                    <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                             <center> <a class="btn btn-add " href="news_case.php"> 
                              <i class="fa fa-archive"></i> All News</a> </center> 
                           </div>
                        </div>
                        <div class="panel-body">





<?php 

  if (isset($_GET['n_id'])) {

      $the_news_id = $_GET['n_id'];
    }

    $query = "SELECT * FROM news WHERE news_id = $the_news_id "; //query for showing post.
    $select_news_info = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_news_info)) {

    $news_id = $row['news_id'];

    $news_title = $row['news_title'];

    $news_author = $row['news_author'];

    $news_content = $row['news_content'];

    $news_image = $row['news_image'];


}

  if (isset($_POST['update_news'])) {
    
    $news_title = mysqli_real_escape_string($connection, $_POST['news_title']);

    $news_author = mysqli_real_escape_string($connection, $_POST['news_author']);

    $news_content = mysqli_real_escape_string($connection, $_POST['news_content']);
    $news_content = str_ireplace('\r\n', '', $news_content);

    
    $news_image = $_FILES['news_image']['name'];
    $news_image_temp = $_FILES['news_image']['tmp_name'];
    

    move_uploaded_file($news_image_temp, "../admin_images/news/$news_image");

    if (empty($news_image)) {
      
      $query = "SELECT * FROM news WHERE news_id = $the_news_id ";
      $select_image = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_array($select_image)) {
        
        $news_image = $row['news_image'];
      }
    }

    $query = "UPDATE news SET ";
    $query.= "news_title = '{$news_title}', ";
    $query.= "news_author = '{$news_author}', ";
    $query.= "news_content = '{$news_content}', ";
    $query.= "news_image = '{$news_image}' ";

    $query.= "WHERE news_id = {$the_news_id} ";

    $update_news = mysqli_query($connection,$query);

    if (! $update_news) {
      die("QUERY FAILED" . mysqli_error($connection));
    } else {
      echo "<center><h4 style='color:green;font-weight:600;'>Your News Has Been Updated!</h4></center>";
    }
    
  }
    

 ?>

                          



                          <form class="col-md-12 col-sm-12" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group col-md-12">
                                 <label>News Title</label>
                                 <input type="text" class="form-control" name="news_title" value="<?php echo $news_title; ?>">
                              </div>
                              
                                 
                              <div class="form-group col-md-12">
                                 <label>News Author</label>
                                 <input type="text" class="form-control" name="news_author" value="<?php echo $news_author; ?>">
                              </div>
                             
                              
                              <div class="form-group col-md-12">
                                 <label>News Content</label>
                                 <textarea id="editor1" class="form-control" rows="3" col="50" name="news_content" ><?php echo $news_content; ?></textarea>
                              </div>


                              <div class="col-md-6">
                                <center>
                                  <img src="../admin_images/news/<?php echo $news_image; ?>" width="30%" class="img-responsive">
                                </center>
                              </div>

                              
                              

                              <div class="form-group col-md-6">
                                 <label>Picture  (1080*512 px)</label>
                                 <input type="file" name="news_image" class="form-control">
                                
                              </div>

                                <br>
                             
                               <div class="form-group col-md-12">
                                 <center><input type="submit" name="update_news" class="btn btn-success" value="Update"></center>
                              </div>
                           </form>
                         </div>
                        </div>
                  </div>




               </div>
               
            </section>
            <!-- /.content -->