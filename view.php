
<?php
Session_start();
$image = "";
$image_src = "";

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");


if(isset($_SESSION['message'])):?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);

?>

</div>

<?php
endif
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>



<div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table100 ver1 m-b-110">
<table data-vertable="ver1">
<thead>
<tr class="row100 head">
<th class="column100 column1" data-column="column1">ID</th>
<th class="column100 column2" data-column="column2">Name</th>
<th class="column100 column3" data-column="column3">Brand</th>
<th class="column100 column4" data-column="column4">Model</th>
<th class="column100 column5" data-column="column5">Color</th>
<th class="column100 column6" data-column="column6">Discription</th>
<th class="column100 column7" data-column="column7">Image</th>
<th class="column100 column7" data-column="column7">Action</th>
	
</tr>
</thead>
<?php
$result = mysqli_query($conn,"SELECT * FROM cars_tbl");

if (mysqli_num_rows($result) > 0) {
?>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tbody>
	<tr class="row100">
	<td class="column100 column1" data-column="column1"><?= $row["car_id"] ; ?></td>
	<td class="column100 column2" data-column="column2"><?= $row["car_name"] ; ?></td>
	<td class="column100 column3" data-column="column3"><?= $row["car_brand"] ; ?></td>
	<td class="column100 column4" data-column="column4"><?= $row["car_model"]; ?></td>
	<td class="column100 column5" data-column="column5"><?= $row["car_color"] ; ?></td>
	<td class="column100 column6" data-column="column6"><?= $row["car_discription"] ; ?></td>
	<td class="column100 column7" data-column="column7"> 
	<img src='<?= "img/".$row['car_image'] ?>' height="100" width="100" > 
	</td>

	<td class="column100 column8" data-column="column8">
	<p>
	<a href="update.php?update=<?php echo $row{'car_id'}?>">
	<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
	<i class="zmdi zmdi-edit">
	</i>Edit 
    </button></a></p>
	<p>
	<a href="delete.php?delete=<?php echo $row{'car_id'}?>"> 
	<i class="zmdi zmdi-delete"></i></button>Delete</a>
	</p></td>
                
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
<?php
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($db, "DELETE FROM cars_tbl WHERE car_id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: view.php');
}
?>