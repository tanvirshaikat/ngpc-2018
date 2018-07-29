<section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-plus"></i>
               </div>
               <div class="header-title">
                  <h1>Add committee</h1>
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
                              <i class="fa fa-newspaper-o" aria-hidden="true"></i> All committee</a>  
                           </div>
                        </div>
                        <div class="panel-body">








	<div class="col-md-12">

		<center>
		  <h1><span class="news-header">Add committee</span></h1>
        </center>
		

    </div>
  
	<div class="col-md-12">
	<div class="form-group">
		&nbsp; &nbsp; &nbsp;<a href="posts.php"><button class="btn btn-primary" ><i class="fa fa-newspaper-o" aria-hidden="true"></i> View All committee</button></a>
	</div>
	



	<?php 
if (isset($_POST['create_post'])) {

	$post_category_id = mysqli_real_escape_string($connection,$_POST['post_category_id']);

	$post_author = mysqli_real_escape_string($connection,$_POST['post_author']);

	$post_title = mysqli_real_escape_string($connection,$_POST['post_title']);
	
	$post_intro = mysqli_real_escape_string($connection, $_POST['post_intro']);
	$post_content = mysqli_real_escape_string($connection, $_POST['post_content']);


	$post_image = $_FILES['image']['name'];
	$post_image = time().$post_image;
	$post_image_temp = $_FILES['image']['tmp_name'];




	move_uploaded_file($post_image_temp, "../admin_images/team/$post_image");

	$query = "INSERT INTO posts(post_category_id, post_author, post_title, post_intro, post_content, post_image) ";

	$query .="VALUES('{$post_category_id}', '{$post_author}','{$post_title}', '{$post_intro}', '{$post_content}', '{$post_image}') ";

	$create_post_query = mysqli_query($connection, $query);

	if (!$create_post_query) {
		die("Query FAILED" . mysqli_error($connection));
	} else {
		echo "<script> window.location='posts.php'; </script>";
	}
	
	
}

 ?>
	<form action="" method="post" enctype="multipart/form-data">



			<div class="form-group col-md-6">
				<label for="title">Name</label>
				<input type="text" name="post_title" placeholder="Enter Name" class="form-control" required>	
			</div>

			<div class="form-group col-md-6">
				<label for="post_intro">Designation</label>	
				<input type="text" name="post_intro" placeholder="Enter Designation" class="form-control">
			</div>

			<div class="form-group col-md-6">
				<label for="post_intro">Phone</label>	
				<input type="number" name="post_content" placeholder="Enter Phone No" class="form-control">
			</div>

			<div class="form-group col-md-6">
				<label for="post_intro">Email</label>	
				<input type="email" name="post_author" placeholder="Enter Mail" class="form-control">
			</div>



			<div class="form-group col-md-6">
				<label for="title">Type</label>

				<select name="post_category_id" class="form-control" >

		<option selected disabled hidden>Choose</option>
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
				
				
				<label for="title">Image</label>
				<input type="file" name="image" class="form-control" required>
				<span style="color:red;"><h5><b> <q> Image size should be 800*860 pixel for best view!</q></b></h5></span>	
			</div>

			
			<div class="clearfix"></div>
			

		<center>
			<div class="form-group">
				<input type="submit" name="create_post" value="Publish" class="btn btn-success">
				
			</div>
		</center>
		

	</form>




               </div>
            </section>

