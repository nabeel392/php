<?php

Session_start();

    if (isset($_COOKIE['username'])) {

$_SESSION['username'] = $_COOKIE['username'];

header("location:index.php");   

    } 
    else 
    {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['sub']))
    {

$result = mysqli_query($conn,"SELECT * from customer_tbl");

$row = mysqli_fetch_array($result);

    $username = $_POST['username'];

   // $hash = password_hash($_POST['password'] , PASSWORD_DEFAULT);
   
   $pass = $_POST['password'];


//$result = mysqli_query($conn,"SELECT * from customer_tbl");
//$row = mysqli_fetch_array($result);

if($username == $row['cust_name'] && password_verify($pass,$row ['cust_pass']))
{

    if (!empty($_POST['remember'])) {

$cookie_name = "username";

setcookie($cookie_name, $username, time() + (86400 * 30));
  
} else {

    setcookie('username', $username, time() - 30);
    }
   
    if (!isset($_SESSION['loggedin'])) {

$_SESSION['username'] = $_POST['username'];

//$_SESSION['message'] = 'Welcome ' . $_SESSION['username'] . '!';

//$_SESSION['msg_type'] = "success";  

header("location:index.php");

    } else {

header("location:user_login.php");

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
<h1>  User login</h1>
</div>
<div class="login-form">
    <form action="user_login.php" method="post">
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
<input type="checkbox" name="remember">Remember Me
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