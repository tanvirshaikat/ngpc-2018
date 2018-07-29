<div class="col-md-12">

        <center><h1><span class="news-header">All Committee</span></h1></center>
        

    </div>
    <br>
<div class="form-group">
 <a style="color:#fff; text-decoration:none;" href="posts.php?source=add_post"><button class="btn btn-primary" ><i class="fa fa-plus-square" aria-hidden="true"></i> Add Committee</button></a>
</div>
                         <table id="example" class="display table table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>phone</th>
                                    <th>Mail</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                                <tfoot>
                                    <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Type</th>
                                    <th>Image</th>
                                    <th>phone</th>
                                    <th>Mail</th>
                                    <th>Action</th>
                                    </tr>
                                </tfoot>
                            <tbody>
                                

<?php 

    $query = "SELECT * FROM posts "; //query for showing post.
    $select_posts = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_posts)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_image = $row['post_image'];
    $post_intro = $row['post_intro'];
       $post_content = $row['post_content'];

    echo "<tr>";
    echo "<td>$post_id</td>";
    
    echo "<td>$post_title</td>";

    echo "<td>$post_intro</td>";



    $query = "SELECT * FROM category WHERE category_id= {$post_category_id} "; //edit categories id.
    $select_categories_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_categories_id)) {
    $post_category_id = $row['category_id'];
    $category_name = $row['category_name'];

    echo "<td>{$category_name}</td>";
    }

    echo "<td><img width='100' src='../admin_images/team/$post_image' ></td>";
echo "<td>$post_content</td>";

    echo "<td>$post_author</td>";



    echo "<td><center><a style='text-decoration:none; color:green;font-size: 30px;' href='posts.php?source=edit_post&p_id={$post_id}'><i class='fa fa-pencil-square' aria-hidden='true'></i></a>
        <a onclick='return ask_for_delete()' style='text-decoration:none; color:red;font-size: 30px;' href='posts.php?delete={$post_id}'><i class='fa fa-trash' aria-hidden='true'></i></a></center></td>";


    echo "</tr>";

}

 ?>


                            </tbody>
                        </table>



<?php 

    if (isset($_GET['delete'])) {
        $the_post_id = $_GET['delete'];
        $query = "SELECT * FROM posts WHERE post_id = {$the_post_id}";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          $post_id = $row['post_id'];
          $post_image = $row['post_image'];
    
        $file = "../images/news_images/$post_image";
            if (!unlink($file))
            {
            echo ("Error deleting $file");
            }
            else
            {
            echo ("Deleted $file");
            }

        $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
        $delete_query = mysqli_query($connection, $query);
        
        echo "<script> window.location='posts.php'; </script>";
    }
}

 ?>

