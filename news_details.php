<?php include "config/header.php" ?>

<body class="home">

<div class="lgx-container ">

<?php include "config/menu.php" ?>





    <?php 

if (isset($_GET['p_id'])) {
    $the_news_id = $_GET['p_id'];
}



$query = "SELECT * FROM news WHERE news_id = $the_news_id ";
    $select_all_news_query = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_all_news_query)) {
        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_image = $row['news_image'];
        $news_content = $row['news_content'];
         $news_image = $row['news_image'];
         $news_author = $row['news_author'];
         $news_date = $row['news_date'];
        // $views = $row['views'];




  ?>
    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="./"><i class="fa fa-home" aria-hidden="true"></i>মূলপাতা</a></li>
                                    <li><a href="news">ব্লগ</a></li>
                                    <li class="active"><?php echo $news_title; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-post-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
<article>
                                <header>
                                    <figure>
                                        <img src="admin_images/news/<?php echo $news_image; ?>" width="100%" alt="News"/>
                                    </figure>
                                    <div class="text-area">
                                        <div class="hits-area">
                                            <div class="date">
                                                <a href="#"><i class="fa fa-user"></i><?php echo $news_author; ?></a>
                                                <a href="#"><i class="fa fa-calendar"></i><?php echo $news_date; ?></a>
                                            </div>
                                        </div>
                                        <h1 class="title"><?php echo $news_title; ?></h1>
                                    </div>
                                </header>
                                <section style="text-align: justify;">
                                    <?php echo $news_content; ?>
                                </section>
                                <footer>
                                    <!-- <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="title">Share</h4>
                                            <div class="lgx-share">
                                                <ul class="list-inline lgx-social">
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook-f" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </footer>
                            </article>












      <?php } ?>















                            










                        </div>
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>

<?php include "config/footer.php" ?>
</body>

</html>
