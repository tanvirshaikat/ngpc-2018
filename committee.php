<?php include "config/header.php" ?>

<body class="home">

<div class="lgx-container ">

<?php include "config/menu.php" ?>

    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">কমিটি</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i>মূলপাতা </a></li>
                                    <li class="active">কমিটি</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

<h2  class="text-center">চেয়ার</h2>


<?php 
          
            $query = "SELECT * FROM posts WHERE post_category_id = 1 ORDER BY post_id DESC";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,150, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,250, "utf-8");
                    $post_intro = $row['post_intro'];


                    ?>


                        <div class="col-md-offset-4 col-xs-12 col-sm-6 col-md-4">
                            <div class="lgx-single-speaker">
                                <figure>
                                    <a class="profile-img"><img src="admin_images/team/<?php echo $post_image; ?>" alt="Committee"/></a>
                                    <figcaption>
                                        <div class="social-group">

                                        </div>
                                        <div class="speaker-info">
                                            <h3 class="title"><a href="#"><?php echo $post_title; ?></a></h3>
                                            <h4 class="subtitle"><i class="fa fa-user-plus"></i> <?php echo $post_intro; ?></h4>
                                            <h4 class="subtitle"><i class="fa fa-phone"></i> <?php echo $post_content; ?></h4>
                                            <h4 style="text-transform: none !important;" class="subtitle"><i class="fa fa-envelope"></i> <?php echo $post_author; ?></h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>




            <?php   }   ?>

<div class="col-md-12"><h2 style="text-align: center!important; border-bottom: 1px solid #0000000a;" class="text-center">কো-চেয়ার</h2></div>




<?php 
          
            $query = "SELECT * FROM posts WHERE post_category_id = 2 ORDER BY post_id DESC";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,150, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,250, "utf-8");
                    $post_intro = $row['post_intro'];


                    ?>


                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="lgx-single-speaker">
                                <figure>
                                    <a class="profile-img"><img src="admin_images/team/<?php echo $post_image; ?>" alt="Committee"/></a>
                                    <figcaption>
                                        <div class="social-group">

                                        </div>
                                        <div class="speaker-info">
                                            <h3 class="title"><a href="#"><?php echo $post_title; ?></a></h3>
                                            <h4 class="subtitle"><i class="fa fa-user-plus"></i> <?php echo $post_intro; ?></h4>
                                            <h4 class="subtitle"><i class="fa fa-phone"></i> <?php echo $post_content; ?></h4>
                                            <h4 style="text-transform: none !important;" class="subtitle"><i class="fa fa-envelope"></i> <?php echo $post_author; ?></h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>




            <?php   }   ?>

<div class="col-md-12"><h2 style="text-align: center!important; border-bottom: 1px solid #0000000a;" class="text-center">মেম্বার</h2></div>


            <?php 
          
            $query = "SELECT * FROM posts WHERE post_category_id = 3 ORDER BY post_id DESC";
                $select_all_posts_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = mb_substr($row['post_title'],0,150, "utf-8");
                    $post_author = mb_substr($row['post_author'],0,26, "utf-8");
                    $post_image = $row['post_image'];
                    $post_content = mb_substr($row['post_content'],0,250, "utf-8");
                    $post_intro = $row['post_intro'];


                    ?>


                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="lgx-single-speaker">
                                <figure>
                                    <a class="profile-img"><img src="admin_images/team/<?php echo $post_image; ?>" alt="Committee"/></a>
                                    <figcaption>
                                        <div class="social-group">

                                        </div>
                                        <div class="speaker-info">
                                            <h3 class="title"><a href="#"><?php echo $post_title; ?></a></h3>
                                            <h4 class="subtitle"><i class="fa fa-user-plus"></i> <?php echo $post_intro; ?></h4>
                                            <h4 class="subtitle"><i class="fa fa-phone"></i> <?php echo $post_content; ?></h4>
                                            <h4 style="text-transform: none !important;" class="subtitle"><i class="fa fa-envelope"></i> <?php echo $post_author; ?></h4>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>




            <?php   }   ?>
                        
                        </div>
                    </div>

                </div>
            </section>
            <!--News END-->
        </div>
    </main>
<?php include "config/footer.php" ?>
</body>

</html>
