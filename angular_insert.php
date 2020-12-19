<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $name     = mysqli_real_escape_string($conn, $info->cust_name);
    $fname   = mysqli_real_escape_string($conn, $info->cust_fname);
    $email      = mysqli_real_escape_string($conn, $info->cust_email);
    $address     = mysqli_real_escape_string($conn, $info->cust_address);
    $pass      = mysqli_real_escape_string($conn, $info->cust_pass);
    $btn_name = $info->btnName;
    if ($btn_name == "Insert") {
        $query = "INSERT INTO customer_tbl(cust_name, cust_fname , cust_email, cust_address , cust_pass)
         VALUES ('$name', '$fname', '$email', '$address', '$pass')";
        if (mysqli_query($conn, $query)) {
            echo "Data Inserted Successfully...";
        } else {
            echo 'Failed';
        }
    }
    if ($btn_name == 'Update') {
        $id    = $info->cust_id;
        $query = "UPDATE customer_tbl SET cust_name = '$name', cust_fname = '$fname', cust_email = '$email' 
        ,cust_address = '$address' ,cust_ pass= '$pass' WHERE cust_id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Data Updated Successfully...';
        } else {
            echo 'Failed';
        }
    }
}
?>