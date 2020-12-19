
<?php
$conn = mysqli_connect("localhost", "root", "", "test");
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
    $id    = $data->cust_id;
    $query = "DELETE FROM customer_tbl WHERE cust_id='$id'";
    if (mysqli_query($conn, $query)) {
        echo 'Data Deleted Successfully...';
    } else {
        echo 'Failed';
    }
}
?>