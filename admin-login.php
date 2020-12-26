<?php

session_start();

if (isset($_COOKIE['username'])) {

    $_SESSION['username'] = $_COOKIE['username'];

    header("location:admin-dash.php");
    
    //echo $_SESSION['username'];
    
} else {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (isset($_POST['sub'])) {

//echo $_POST['rem'];

$result = mysqli_query($conn,"SELECT * from admin_tbl where admin_name = '".$_POST['username']."'");

$row = mysqli_fetch_array($result);

$username = $_POST['username'];

// $hash = password_hash($_POST['password'] , PASSWORD_DEFAULT);

$pass = $_POST['password'];

//echo $_POST['rem'];

//$result = mysqli_query($conn,"SELECT * from admin_tbl where admin_name = '".$_POST['username']."'");
//$row = mysqli_fetch_array($result);

//echo $row['admin_pass'];
    
if ($username == $row['admin_name'] && password_verify($pass, $row ['admin_pass'])
) {
    //$remember = true;
    
    if (!empty($_POST['rem'])) {

$cookie_name = "username";

setcookie($cookie_name, $username, time() + (86400 * 30));

    } else {

setcookie('username', $username, time() - 30);

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

include_once("top.php");
?>


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
<input type="checkbox" name="rem" id = "rem"/>Remember Me
</label>

</div>
<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">Login</button>

</form>

</div>
</div>
</div>
</div>
</div>
</div>

  <?php
include_once("bottom.php");
  ?>

</body>

</html>
<!-- end document-->