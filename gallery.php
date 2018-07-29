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
                                    <h2 class="heading">গ্যালারি</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i>মূলপাতা </a></li>
                                    <li class="active">গ্যালারি</li>
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

                        <div class="col-sm-12">
                            <div class="lgx-photo-gallery lgx-gallery-area">
<h2 class="text-center">এনজিপিসি ২০১৭</h2>
<br>


<?php 

            $query = "SELECT * FROM banner order by banner_id DESC";
                $select_all_news_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_news_query)) {
                    $banner_id = $row['banner_id'];
                    $banner_image_title = substr($row['banner_image_title'],0,35);
                    $banner_image = $row['banner_image'];
                    $banner_date = $row['banner_date'];
                    if ($banner_image_title == 2017) {
{ 
                        
 
                    ?>
                       
<div  class="lgx-gallery-single">
                                    <figure>
                                        <img src="admin_images/banner/<?php echo $banner_image;?>"/>
                                        <figcaption class="lgx-figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a href="#" data-toggle="modal" data-target="#cg<?php echo $banner_id;?>">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div> <!--Single photo-->

                                <!-- Modal -->
                                <div class="modal fade" id="cg<?php echo $banner_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">Close &times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                       <img src="admin_images/banner/<?php echo $banner_image;?>" />
                                      </div>

                                    </div>
                                  </div>
                                </div>


                    
                    <?php   }}}  ?>

                                




                                

                            </div>
                        </div> <!--//.COL-->


                        <div class="col-sm-12">
                            <div class="lgx-photo-gallery lgx-gallery-area">
 </br>    </br>                            
<h2 class="text-center">এনজিপিসি ২০১৮</h2>
<br>


<?php 

            $query = "SELECT * FROM banner order by banner_id DESC";
                $select_all_news_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_news_query)) {
                    $banner_id = $row['banner_id'];
                    $banner_image_title = substr($row['banner_image_title'],0,35);
                    $banner_image = $row['banner_image'];
                    $banner_date = $row['banner_date'];
                    if ($banner_image_title == 2018) {
{ 
                        
 
                    ?>
                       
                                <div  class="lgx-gallery-single">
                                    <figure>
                                        <img src="admin_images/banner/<?php echo $banner_image;?>"/>
                                        <figcaption class="lgx-figcaption">
                                            <div class="lgx-hover-link">
                                                <div class="lgx-vertical">
                                                    <a href="#" data-toggle="modal" data-target="#cg<?php echo $banner_id;?>">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div> <!--Single photo-->

                                <!-- Modal -->
                                <div class="modal fade" id="cg<?php echo $banner_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div style="padding: 6px !important;" class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">Close &times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                       <img src="admin_images/banner/<?php echo $banner_image;?>" />
                                      </div>

                                    </div>
                                  </div>
                                </div>


                    
                    <?php   }}}  ?>

                                




                                

                            </div>
                        </div> <!--//.COL-->


                    </div>
                </div><!-- //.CONTAINER -->


            </section>
            <!--News END-->
        </div>
    </main>

<?php include "config/footer.php" ?>
</body>

</html>
