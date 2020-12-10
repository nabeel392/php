<?php

session_start();

if (isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
	header("location:admin-dash.php");
	echo $_SESSION['username'];
} else {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (isset($_POST['sub'])) {
		
		echo $_POST['rem'];
		
		$result = mysqli_query($conn,"SELECT * from admin_tbl where admin_name = '".$_POST['username']."'");
		$row = mysqli_fetch_array($result);
        $username = $_POST['username'];

        // $hash = password_hash($_POST['password'] , PASSWORD_DEFAULT);
        
        $pass = $_POST['password'];
        
        /*             
        if (!empty($_POST['rem'])) {
            $remember = true;
        } else {
            $remember =false;
        } 
        */

        //$result = mysqli_query($conn,"SELECT * from admin_tbl where admin_name = '".$_POST['username']."'");
        //$row = mysqli_fetch_array($result);

		echo $row['admin_pass'];
                    
        if ($username == $row['admin_name'] && 
            password_verify($pass, $row ['admin_pass'])
        ) {
			$remember = true;
            if ($remembe=true) {
				$cookie_name = "username";
                setcookie($cookie_name, $username, time() + (86400 * 30));
            } else {
                //setcookie('username', $username, time() - 30);
            }
                            
            if (!isset($_SESSION['loggedin'])) {
                $_SESSION['username'] = $_POST['username'];
                //$_SESSION['message'] = 'Welcome ' . $_SESSION['username'] . '!';
                //$_SESSION['msg_type'] = "success";  
                header("location:admin-dash.php");
            } else {
                header("location:admin-login.php");
            }
        } else {
            echo "invalid username or password";
        }
                    
    }                 
}

//function logoutAction1() {
  //  setcookie("username", "", time() - 70);
   // return true;
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                        <h1> Admin Login</h1>
                        </div>
                        <div class="login-form">
                            <form action="admin-login.php" method="post">
                                <div class="form-group">
                                    <label>Username:</label>
                                    <input class="au-input au-input--full" type="text" id="uname" name="username" placeholder="Your Name..">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input class="au-input au-input--full" type="text" id="pas" name="password" placeholder="Your Password..">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="rem" value="true" id = "rem"/>Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">Login</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->