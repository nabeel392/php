<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0) {
    $name = mysqli_real_escape_string($conn, $info->cust_name);
    $fname = mysqli_real_escape_string($conn, $info->cust_fname);
    $email = mysqli_real_escape_string($conn, $info->cust_email);
    $address = mysqli_real_escape_string($conn, $info->cust_address);
    $pass = mysqli_real_escape_string($conn, $info->cust_pass);


    $query = "INSERT INTO customer_tbl(cust_name, cust_fname , cust_email, cust_address , cust_pass) 
    VALUES ('$name', '$fname', '$email', '$address', '$pass')"; 
    if(mysqli_query($conn, $query)) {
        echo "Insert Data Successfully";
    }
    else {
        echo "Failed";
    }
}
?>