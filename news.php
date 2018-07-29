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
                                    <h2 class="heading">কন্টেস্ট আপডেট</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i>মূলপাতা</a></li>
                                    <li class="active">কন্টেস্ট আপডেট</li>
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



<?php 

            $query = "SELECT * FROM news order by news_id DESC";
                $select_all_news_query = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_news_query)) {
                    $news_id = $row['news_id'];
                    $news_title = substr($row['news_title'],0,500);
                    $news_content = substr($row['news_content'],0,500);
                    $news_image = $row['news_image'];
                    $news_date = $row['news_date'];
                    $news_date = $row['news_date'];
{ 
                        
 
                    ?>                          

                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="lgx-single-news">
                                <figure>
                                    <a href="news_details.php?p_id=<?php echo $news_id; ?>"><img src="admin_images/news/<?php echo $news_image; ?>" height="198px" alt=""></a>
                                </figure>
                                <div class="single-news-info">
                                    <div class="meta-wrapper">
                                        <span><?php echo $news_date; ?></span>
                                        <!-- <span>by <a href="#">Riazsagar</a></span>-->
                                    </div>
                                    <h3 class="title"><a href="news_details.php?p_id=<?php echo $news_id; ?>"><?php echo $news_title; ?></a></h3>
                                    <a class="lgx-btn lgx-btn-white lgx-btn-sm" href="news_details.php?p_id=<?php echo $news_id; ?>"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    
                    <?php   }}  ?>














                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>
<?php include "config/footer.php" ?>
</body>

</html>
