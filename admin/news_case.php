<?php include('includes/header.php'); ?>


   <body class="hold-transition sidebar-mini">

      <!-- Site wrapper -->
      <div class="wrapper">
<?php include('includes/header_navigation.php'); ?>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
<?php include('includes/sidebar_navigation.php'); ?>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->


<?php 

if (isset($_GET['source'])) {
     $source = $_GET['source'];
 }else{
    $source='';
 } 

 switch($source ) {


    
    case 'add_news':
        include "includes/news/add_news.php";
        break;

    case 'edit_news':
        include "includes/news/edit_news.php";
        break;

    case '200':
        echo "All responsibility goes to Arifur Rahman";
        break;

    default:
        include "includes/news/all_news.php";
        break;

 }

 ?>        



            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
<?php include('includes/footer.php'); ?>