<?php

session_start();
//include ('logout.php');
if (!isset($_SESSION['username']))
 {
    header("location:admin-login.php");
    exit();
 }
 elseif(isset($_SESSION['username']))
 {
      

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

include_once("top.php");  
?>

<head>
        <link rel="stylesheet" href="admin.css">
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	   <!-- Bootstrap CSS-->
	    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <!--===============================================================================================-->	
            <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="table/table1/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="table/table1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="table/table1/vendor/animate/animate.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="table/table1/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="table/table1/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="table/table1/css/util.css">
            <link rel="stylesheet" type="text/css" href="table/table1/css/main.css">
        <!--===============================================================================================-->


        </head>


        <body class="animsition">
            <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
        <div class="header3-wrap">
        <div class="header__logo">
        <a href="#">
        <!-- <img src="images/icon/logo-white.png" alt="CoolAdmin" /> -->
        <h3 style="color:white;">Admin Panel</h3>
        </a>
        </div>
        <div class="header__navbar">
        <ul class="list-unstyled">
        <li class="has-sub">
            <a href="#">
        <i class="fas fa-tachometer-alt"></i>Dashboard
        <span class="bot-line"></span>
            </a>
            <ul class="header3-sub-list list-unstyled">
        <li>
        <a href="create.php">Add Cars</a>
        </li>
        <li>
        <a href="create_admin.php">Add Another Admin</a>
        <!-- </li>
        <li>
        <a href="View_admin.php">Display All Admins</a>
        </li> -->
        <li>
        <a href="view.php">Display all Cars</a>
        </li>
        <li>
        <a href="view_user.php">Display all Users</a>
        </li>
            </ul>
        </li>
        
            </ul>
        </li>
        </div>

        <div class="account-wrap">
        <div class="account-item account-item--style2 clearfix js-item-menu">
            <div class="image">
        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
            </div>
            <div class="content">
        <a class="js-acc-btn" href="#">
            <?php echo $_SESSION['username'];
        
        ?>
        
        </a>
            </div>
            <div class="account-dropdown js-dropdown">
        <div class="info clearfix">
        <div class="image">
        <a href="#">
        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
        </a>
        </div>
        <div class="content">
        <h5 class="name">
        <a href="#"><?php 
        
        echo $_SESSION['username']."!";
        ?></a>
        </h5>
        <span class="email">Active</span>
        </div>
        </div>
        <div class="account-dropdown__body">
        
        <div class="account-dropdown__footer">
        <a href="logout.php">
        <i class="zmdi zmdi-power"></i>
        Logout
        </a>
        </div>
            </div>
        </div>
        </div>
        </div>
        </div>

        </header>
        <!-- END HEADER DESKTOP-->


        <!-- END HEADER MOBILE -->


        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section style="background-color:white" class="welcome p-t-10">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <h1 " class="title-4">Welcome back
            <span><?php 
        
        echo $_SESSION['username']."!";
        ?></span>
                                                    
        </h1>
        <hr class="line-seprate">
        </div>
        </div>
        </div>
        </section>
        <!-- END WELCOME-->



        <section id="admin">



        <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
            <table data-vertable="ver1">
        <thead>
            <tr class="row100 head">
        <th class="column100 column1" data-column="column1">ID</th>
        <th class="column100 column2" data-column="column2">Name</th>
        <th class="column100 column3" data-column="column3">Email</th>
        <th class="column100 column4" data-column="column4">Password</th>
        <th class="column100 column7" data-column="column7">Action</th>

            
            </tr>
        </thead>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM admin_tbl");

        if (mysqli_num_rows($result) > 0) {
        ?>
        
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tbody>
            <tr class="row100">
        <td class="column100 column1" data-column="column1"><?php   echo  $row["admin_id"]   ;   ?></td>
        <td class="column100 column2" data-column="column2"><?php   echo   $row["admin_name"] ;   ?></td>
        <td class="column100 column3" data-column="column3"><?php   echo   $row["admin_address"]  ;  ?></td>
        <td class="column100 column4" data-column="column4"><?php   echo    $row["admin_pass"];   ?></td>


        <td class="column100 column8" data-column="column8"><p><a href="update_admin.php?update=<?php echo $row{'admin_id'}?>">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i>Edit 
        </button></a></p><p><a href="delete_admin.php?delete=<?php echo $row{'admin_id'}?>"> 
        <i class="zmdi zmdi-delete"></i></button>Delete</a></p></td>
                        
            </tr>

            
        </tbody>

        <?php
        $i++;
        }
        ?>

        <?php
        }
        else{
            echo "No result found";
        }

            ?>
            </table>
        </div>


        </div>
            </div>

        </section>

        <!-- END DATA TABLE-->

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="copyright">
            <p>Copyright © 2018 . All rights reserved. Template by <a href="">US</a>.</p>
        </div>
        </div>
        </div>
        </div>
        </section>
        <!-- END COPYRIGHT-->
        </div>

            </div>

        <?php
        include_once("bottom.php");
        ?>


        <!--===============================================================================================-->	
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="js/main.js"></script>
            
        </body>

        </html>
        <!-- end document-->
        <?php

        }
        ?>
