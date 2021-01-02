<?php
Session_start();

$servername='localhost';
$username='root';
$password='';
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

if(isset($_GET['update']))
{
	$id = $_GET['update'];
	// $update = true;
	$result  = mysqli_query($conn,"SELECT * from cars_tbl where car_id = $id") ; 
    if(mysqli_num_rows($result) > 0)
    {

	$row = mysqli_fetch_array($result);
	$car_name = $row['car_name'];
	$car_brand = $row['car_brand'];
    $car_model = $row['car_model'];
    $car_color = $row['car_color'];
    $car_discription = $row['car_discription'];
    $car_image = $row['car_image'];


	}
    
}

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <section  action="img_page.php?update=<?=$_GET['update'] ?>">
    <div class="container">
    <div style="background-color:purple" class="header">
    <p style="padding-left:600px;font-size:50px;text-decoration:underline;font-weight:bold;color:white">Car Page</p>
    </div>
    <div class="img">
    <img style="border:2px solid black" src='<?= "img/".$row['car_image'] ?>'height="800px" width="1330px"> 
    </div>
    <div class="name">
    <p style="font-size:30px;border-bottom:1px solid black;padding-left:550px;font-weight:bold">NAME:   <?= $car_name ?></p>
    </div>
    <div class="name">
    <p style="font-size:30px;border-bottom:1px solid black;padding-left:550px;font-weight:bold">BRAND:   <?= $car_brand ?></p>
    </div>
    <div class="name">
    <p style="font-size:30px;border-bottom:1px solid black;padding-left:550px;font-weight:bold">MODEL:   <?= $car_model ?></p>
    </div>
    <div class="name">
    <p style="font-size:30px;border-bottom:1px solid black;padding-left:550px;font-weight:bold">COLOR:   <?= $car_color ?></p>
    </div>
    <div class="name">
    <p style="font-size:20px;border-bottom:1px solid black;padding-bottom:50px;padding-top:10px;font-weight:bold">DESCRIPTION:   <?= $car_discription ?></p>
    </div>
    <div style="background-color:purple;padding-top:20px" class="footer">
    <p style="padding-top:70px">
    </p>   
    </div>
    </div>
    </section>
 
    </body>
    </html>