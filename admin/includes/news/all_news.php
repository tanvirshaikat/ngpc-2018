            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-newspaper-o" aria-hidden="true"></i>
               </div>
               <div class="header-title">
                  <h1>All News</h1>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="news_case.php?source=add_news"> 
                              <i class="fa fa-plus"></i> Add News</a>  
                           </div>
                        </div>
                        <div class="panel-body">

                           <div class="table-responsive">
                              <table id="example" class="display table table-bordered table-hover" cellspacing="0" width="100%">
                                 <thead>
                                    <tr class="info">


                                       <th>ID</th>
                                       <th>News Title</th>
                                       <th>Author</th>
                                       <th>News Content</th>
                                       <th>Image</th>
                                       <th>Date</th>
                                       <th>Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>


<?php

$query = "SELECT * FROM news";
$select_news_info = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_news_info)) {
   
   $news_id = $row['news_id'];
   $news_title = $row['news_title'];
   $news_content = $row['news_content'];
   $news_author = $row['news_author'];
   $news_image = $row['news_image'];
   $news_date = $row['news_date'];


   echo "<tr>";

   echo "<td> $news_id </td>";

   echo "<td> $news_title </td>";

   echo "<td> $news_author </td>";

   echo "<td> $news_content </td>";

   echo "<td> <img height='70' src='../admin_images/news/$news_image' > </td>";

   echo "<td> $news_date </td>";

   echo "<td>
               <a style='text-decoration:none; color:green;font-size: 30px;' href='news_case.php?source=edit_news&n_id={$news_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>
               <a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='news_case.php?delete={$news_id}'><i class='fa fa-trash' aria-hidden='true'></i></a>
         </td>";

   echo "</tr>";
}

 ?>


                                    
                                 </tbody>
                              </table>




<?php 

    if (isset($_GET['delete'])) {
        $the_news_id = $_GET['delete'];
        $query = "SELECT * FROM news WHERE news_id = $the_news_id";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $news_id = $row['news_id'];
          $news_image = $row['news_image'];
    
        $file = "../admin_images/news/$news_image";
            if (!unlink($file))
            {
            echo ("Error deleting $file");
            }
            else
            {
            echo ("Deleted $file");
            }

        $query = "DELETE FROM news WHERE news_id = $the_news_id ";
        $delete_query = mysqli_query($connection, $query);
        
        echo "<script> window.location='news_case.php'; </script>";
    }
}

 ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             
            </section>
            <!-- /.content -->