<?php  
 $conn = mysqli_connect("localhost", "root", "", "test");  
 $info = json_decode(file_get_contents("php://input"));  
 if(count($info) > 0) {  
      $id = $info->cust_id;  
      $query = "DELETE FROM customer_tbl WHERE cust_id='$id'";  
      if(mysqli_query($conn, $query)) {  
           echo 'You data has successfully been deleted..';  
      } else {  
           echo 'Failed';  
      }  
 }  
 ?>