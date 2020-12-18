
<?php
$conn = mysqli_connect("localhost", "root", "", "angular_js");
$info = json_decode(file_get_contents("php://input"));
if(count($info) > 0) {
    $name = mysqli_real_escape_string($conn, $info->name);
    $email = mysqli_real_escape_string($conn, $info->email);
    $age = mysqli_real_escape_string($conn, $info->age);
    $query = "INSERT INTO insert_emp_info(name, email, age) 
    VALUES ('$name', '$email', '$age')"; 
    if(mysqli_query($conn, $query)) {
        echo "Insert Data Successfully";
    }
    else {
        echo "Failed";
    }
}
?>