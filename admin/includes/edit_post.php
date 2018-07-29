<div class="row">

	<div class="col-md-12">

		<center><h1><span class="news-header">Edit committee</span></h1></center>
		

    </div>

	<div class="col-md-12">
<div class="form-group">
		&nbsp; &nbsp; &nbsp;<a href="posts.php"><button class="btn btn-primary" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> View All committee</button></a>
	</div>		
	

<?php 

	if (isset($_GET['p_id'])) {

    	$the_post_id = $_GET['p_id'];
    }

	$query = "SELECT * FROM posts WHERE post_id= $the_post_id "; //query for showing post.
    $the_posts_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($the_posts_id)) {

    $post_id = $row['post_id'];

    $post_author = $row['post_author'];

    $post_title = $row['post_title'];

    $post_intro = $row['post_intro'];

    $post_content = $row['post_content'];

    $post_category_id = $row['post_category_id'];

    $post_image = $row['post_image'];


}

	if (isset($_POST['update_post'])) {
		
		$post_author = mysqli_real_escape_string($connection, $_POST['post_author']);
		$post_title = mysqli_real_escape_string($connection, $_POST['post_title']);
		$post_intro = mysqli_real_escape_string($connection, $_POST['post_intro']);
		$post_content = mysqli_real_escape_string($connection, $_POST['post_content']);
		$post_category_id = mysqli_real_escape_string($connection, $_POST['post_category_id']);
		$post_image = $_FILES['image']['name'];
		$post_image_temp = $_FILES['image']['tmp_name'];



		move_uploaded_file($post_image_temp, "../admin_images/team/$post_image");

		if (empty($post_image)) {
			
			$query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
			$select_image = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_array($select_image)) {
				
				$post_image = $row['post_image'];
			}
		}

		$query = "UPDATE posts SET ";
		$query.= "post_author = '{$post_author}', ";
		$query.= "post_title = '{$post_title}', ";
		$query.= "post_intro = '{$post_intro}', ";
		$query.= "post_content = '{$post_content}', ";
		$query.= "post_category_id = '{$post_category_id}', ";
		$query.= "post_image = '{$post_image}' ";		




		$query.= "WHERE post_id = {$the_post_id} ";

		$update_post = mysqli_query($connection,$query);

		if (! $update_post) {
			die("QUERY FAILED" . mysqli_error($connection));
		} else {
			echo "<center><h4 style='color:green;font-weight:600;'>Your committee Has Been Updated!</h4></center>";
		}
		
	}
    

 ?>






<form action="" method="post" enctype="multipart/form-data">



			<div class="form-group col-md-6">
				<label for="title">Edit Name</label>
				<input type="text" name="post_title" value="<?php echo $post_title; ?>" class="form-control" >	
			</div>



			<div class="form-group col-md-6">
				<label for="post_intro">Edit Designation</label>
				<input type="text" name="post_intro" class="form-control" value="<?php echo $post_intro; ?>" >	
			</div>

			<div class="form-group col-md-6">
				<label for="post_intro">Edit Phone</label>
				<input type="number" name="post_content" class="form-control" value="<?php echo $post_content; ?>" >	
			</div>

			<div class="form-group col-md-6">
				<label for="post_intro">Edit Mail</label>
				<input type="email" name="post_author" class="form-control" value="<?php echo $post_author; ?>" >	
			</div>



			<div class="form-group col-md-6">
				<label for="title">Edit Type</label>

							<select name="post_category_id" id="" class="form-control" >

			<?php 


			$query = "SELECT * FROM category WHERE category_id= {$post_category_id} "; //edit categories id.
			$select_categories_id = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_categories_id)) {
			$category_id = $row['category_id'];
			$category_name = $row['category_name'];

			echo "<option value='$category_id'>{$category_name}</option>";
			}

			 ?>

				
			<?php 				

			$query = "SELECT * FROM category ";
			$select_categories = mysqli_query($connection, $query);

			while ($row = mysqli_fetch_assoc($select_categories)) {
			$category_id = $row['category_id'];
			$category_name = $row['category_name'];

			echo "<option value='$category_id'>{$category_name}</option>";


			}

			?>
			
			</select>

			</div>




			<div class="form-group col-md-6">
			    <label for="image">Edit Image</label>
				<input type="file" name="image" class="form-control">
				<img src="../admin_images/team/<?php echo $post_image; ?>" alt="" width="200">
				<span style="color:red;"><h5><b> <q> Image size should be 800*860 pixel for best view!</q></b></h5></span>	
			</div>



			<div class="clearfix"></div>
			

		<center>
			<div class="form-group">
				<input type="submit" name="update_post" value="Update" class="btn btn-success">
				
			</div>
		</center>
		

	</form>



</div>
</div>







