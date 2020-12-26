

        <?php
        Session_start();

        $servername='localhost';
        $username='root';
        $password='';
        $dbname = "test";
        $conn=mysqli_connect($servername,$username,$password,"$dbname");
        // $id = 0;
        // $update = false;
        // $name = "";
        // $fname = "";
        // $pass = "";
        // $add = "";
        // $phone = "";
        // $email = "";
        // $status = "";


        if(isset($_GET['update'])){
            $id = $_GET['update'];
            // $update = true;
            $result  = mysqli_query($conn,"SELECT * from customer_tbl where cust_id = $id") ; 
            if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $cust_name = $row['cust_name'];
            $cust_fname = $row['cust_fname'];
            $cust_email = $row['cust_email'];
            $cust_address = $row['cust_address'];
            $cust_pass = $row['cust_pass'];

            }
            }

        // $update = true;	


        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['sub']))
            {	 
        $cust_name = $_POST['cust_name'];
        if(preg_match("/[A-Za-z]/",$cust_name)){
        //	$nameErr = "invalid username";
        //echo " matching";
        $name = 1;
        }
        else{
            $name = 0;
        }
            
        $cust_fname = $_POST['cust_fname'];
        if(preg_match("/[A-Za-z]/",$cust_fname)){
        //echo " matching";
        $fname = 1;
        }
        else{
            $fname= 0;
        }
        $cust_email = $_POST['cust_email'];
        if(preg_match("/[A-Za-z0-9]+@+[a-z]+.+[a-z]/",$cust_email)){
        //	$nameErr = "invalid username";
        //echo " matching";
        $email = 1;
        }
        else{
            $email = 0;
        }

        $cust_address= $_POST['cust_address'];
        if(preg_match("/[A-Za-z0-9]/",$cust_address)){
        //echo " matching";
        $address = 1;}
        else{
            $address = 0;
        }
        if($cust_pass = password_hash($_POST['cust_pass'] , PASSWORD_DEFAULT))
        {
        //$hash_password = password_hash($password , PASSWORD_DEFAULT);
        //$is_verify = password_verify($password , $hash_password);
            //echo " matching";
            //if($is_verify)
        $c= 1;	
        }
        else{
            $c= 0;
        }
                
        if(($name >= 1) && ($fname >=1) && ($email >=1) && ($address >=1) && ($c >=1)){
            $sql = "UPDATE customer_tbl Set cust_name = $cust_name ,cust_fname = $cust_fname,cust_email = $cust_email,
            cust_address = $cust_address,cust_pass = $cust_pass where cust_id = $id";
            if (mysqli_query($conn, $sql )) {
                echo "record updated successfully !";
                ?>
                <script>
                alert("record updated successfully");
                </script>
                    <?php
            
            }
            header("location:view_user.php");
        }
            else {
                ?>
                <script>
                alert("invalid");
                </script>
                    <?php
                echo "Error: " . $sql . "
        " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
        }
        include_once("top.php");	 
            ?>


        <body class="animsition">
        
        <div class="page-content--bge5">
            <div class="container">
        <div class="login-wrap">
            <div class="login-content">
        <div class="login-logo">
            <a href="#">
        <!-- <img src="images/icon/logo.png" alt="CoolAdmin"> -->
            </a>
        </div>
        <div class="login-form">
            <form action="update_user.php?update=<?=$_GET['update'] ?>" method="post">

        <div class="form-group">
        <input type="hidden" name="cust_id" value="<?php echo $id; ?>">
            <label>Name</label>
            <input class="au-input au-input--full" class="text" type="text" name="cust_name" value="<?php echo $cust_name; ?>" placeholder="your name" required >
        </div>
        <div class="form-group">
            <label>Fathername</label>
            <input class="au-input au-input--full"  class="text " type="text" name="cust_fname" value="<?php echo $cust_fname; ?>" placeholder="father name" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="au-input au-input--full"type="text"  name="cust_email" value="<?php echo $cust_email; ?>"  placeholder="email here" required >
        </div>
        <div class="form-group">
            <label>Address</label>
            <input class="au-input au-input--full" type="text" name="cust_address" value="<?php echo $cust_address; ?>" placeholder="address here" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full" type="text" name="cust_pass" value="<?php echo $cust_pass; ?>" placeholder="password" required>
        </div>

        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="sub">Click to Add</button>

            </form>
            
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